document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("consultationForm");
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const nextButton = document.getElementById("nextToStep2");
    const backButton = document.getElementById("backToStep1");
    const submitButton = document.getElementById("submitBooking");

    let selectedDate = null;
    let selectedTimeSlot = null;
    let currentDate = new Date();

    // Initialisation
    initializeCalendar();
    initializeTimeSlots();
    setupEventListeners();

    function setupEventListeners() {
        // Navigation entre les étapes
        nextButton.addEventListener("click", () => {
            if (validateStep1()) {
                step1.classList.add("hidden");
                step2.classList.remove("hidden");
            }
        });

        backButton.addEventListener("click", () => {
            step2.classList.add("hidden");
            step1.classList.remove("hidden");
        });

        // Navigation du calendrier
        document.getElementById("prevMonth").addEventListener("click", () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendar();
        });

        document.getElementById("nextMonth").addEventListener("click", () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendar();
        });

        // Soumission du formulaire
        form.addEventListener("submit", handleSubmit);
    }

    function validateStep1() {
        const requiredFields = [
            "firstName",
            "lastName",
            "email",
            "phone",
            "description",
        ];
        let isValid = true;

        requiredFields.forEach((field) => {
            const element = document.getElementById(field);
            if (!element.value.trim()) {
                element.classList.add("border-red-500");
                isValid = false;
            } else {
                element.classList.remove("border-red-500");
            }
        });

        return isValid;
    }

    function initializeCalendar() {
        updateCalendar();
    }

    function updateCalendar() {
        const monthNames = [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
        ];

        document.getElementById("currentMonth").textContent = `${
            monthNames[currentDate.getMonth()]
        } ${currentDate.getFullYear()}`;

        generateCalendarDays();
    }

    function generateCalendarDays() {
        const calendarDays = document.getElementById("calendarDays");
        calendarDays.innerHTML = "";

        const firstDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            1
        );
        const lastDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth() + 1,
            0
        );

        // Ajout des jours vides au début
        let firstDayIndex = firstDay.getDay() || 7;
        for (let i = 1; i < firstDayIndex; i++) {
            addDayToCalendar("", true);
        }

        // Ajout des jours du mois
        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                day
            );
            const isDisabled = date < new Date().setHours(0, 0, 0, 0);
            addDayToCalendar(day, isDisabled);
        }
    }

    function addDayToCalendar(day, isDisabled) {
        const dayElement = document.createElement("div");
        dayElement.className = `p-2 text-center ${
            isDisabled ? "text-gray-300" : "cursor-pointer hover:bg-primary/10"
        }`;
        dayElement.textContent = day;

        if (!isDisabled && day !== "") {
            dayElement.addEventListener("click", () => selectDate(day));
        }

        document.getElementById("calendarDays").appendChild(dayElement);
    }

    function initializeTimeSlots() {
        const timeSlots = [
            "09:00",
            "09:30",
            "10:00",
            "10:30",
            "11:00",
            "11:30",
            "14:00",
            "14:30",
            "15:00",
            "15:30",
            "16:00",
            "16:30",
        ];

        const timeSlotsContainer = document.getElementById("timeSlots");
        timeSlots.forEach((slot) => {
            const button = document.createElement("button");
            button.type = "button";
            button.className =
                "p-2 text-center border rounded-md hover:border-primary transition";
            button.textContent = slot;
            button.addEventListener("click", () => selectTimeSlot(slot));
            timeSlotsContainer.appendChild(button);
        });
    }

    function selectDate(day) {
        selectedDate = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            day
        );
        updateSelectedDateVisual();
        checkFormValidity();
    }

    function selectTimeSlot(slot) {
        selectedTimeSlot = slot;
        updateSelectedTimeSlotVisual();
        checkFormValidity();
    }

    function updateSelectedDateVisual() {
        const days = document.querySelectorAll("#calendarDays div");
        days.forEach((day) => {
            day.classList.remove("bg-primary/10");
        });

        if (selectedDate) {
            const selectedDay = Array.from(days).find(
                (day) => day.textContent === selectedDate.getDate().toString()
            );
            if (selectedDay) {
                selectedDay.classList.add("bg-primary/10");
            }
        }
    }

    function updateSelectedTimeSlotVisual() {
        const slots = document.querySelectorAll("#timeSlots button");
        slots.forEach((slot) => {
            slot.classList.remove("border-primary", "bg-primary/10");
        });

        if (selectedTimeSlot) {
            const selectedSlot = Array.from(slots).find(
                (slot) => slot.textContent === selectedTimeSlot
            );
            if (selectedSlot) {
                selectedSlot.classList.add("border-primary", "bg-primary/10");
            }
        }
    }

    function checkFormValidity() {
        submitButton.disabled = !(selectedDate && selectedTimeSlot);
    }

    async function handleSubmit(e) {
        e.preventDefault();

        const formData = {
            firstName: document.getElementById("firstName").value,
            lastName: document.getElementById("lastName").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            consultationType: document.querySelector(
                'input[name="consultationType"]:checked'
            ).value,
            description: document.getElementById("description").value,
            date: selectedDate.toISOString(),
            timeSlot: selectedTimeSlot,
        };

        try {
            const response = await fetch("/api/consultations", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify(formData),
            });

            const data = await response.json();

            if (data.success) {
                // Redirection ou affichage d'un message de succès
                window.location.href = "/consultation/success";
            } else {
                throw new Error(data.message || "Une erreur est survenue");
            }
        } catch (error) {
            console.error("Erreur:", error);
            // Afficher un message d'erreur à l'utilisateur
        }
    }
});
