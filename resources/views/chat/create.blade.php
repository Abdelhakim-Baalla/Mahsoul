@extends('layouts.app')

@section('title', 'Nouvelle conversation - Mahsoul Assistant')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-10">
            <i class="fas fa-robot text-forest/30 text-6xl mb-4"></i>
            <h1 class="font-display text-3xl md:text-4xl font-extrabold text-forest mb-2">Nouvelle conversation</h1>
            <p class="text-clay">Démarrez une nouvelle discussion avec Mahsoul Assistant</p>
        </div>

        <div class="card-eco bg-white p-8 max-w-2xl mx-auto">
            <form action="{{ route('chat.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="message" class="block text-sm font-medium text-forest mb-2">Votre message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="6" 
                        placeholder="Posez votre question agricole... (ex: Comment traiter la pourriture des tomates ?)"
                        class="w-full px-4 py-3 input-eco resize-none"
                        required></textarea>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="flex-1 btn-sun">
                        <i class="fas fa-paper-plane mr-2"></i>Démarrer la conversation
                    </button>
                    <a href="{{ route('chat.index') }}" class="px-6 py-3 bg-cream text-forest font-medium rounded-full hover:bg-earth-200 text-center">
                        Annuler
                    </a>
                </div>
            </form>
        </div>

        <div class="mt-8 text-center">
            <p class="text-clay">Ou choisissez un sujet prédéfini :</p>
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach([
                    'Comment traiter la pourriture des tomates ?',
                    'Quand arroser mes oliviers ?',
                    'Quels engrais bio pour mes citronniers ?',
                    'Comment lutter contre la mouche de l\'olivier ?',
                ] as $topic)
                <button 
                    onclick="startTopic('{{ $topic }}')"
                    class="p-4 bg-white rounded-2xl border border-earth-200 hover:border-leaf hover:bg-cream/50 transition text-left text-sm text-clay hover:text-forest"
                >
                    {{ $topic }}
                </button>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function startTopic(topic) {
    document.getElementById('message').value = topic;
    document.querySelector('form').submit();
}
</script>
@endpush