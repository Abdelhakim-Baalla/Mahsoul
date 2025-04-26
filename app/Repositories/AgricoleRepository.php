<?php

namespace App\Repositories;

use App\Models\Agricole;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;

class AgricoleRepository implements AgricoleRepositoryInterface
{
    public function create(array $data)
    {
        return Agricole::create($data);
    }


    public function getById(int $id)
    {
        return Agricole::find($id);
    }

    public function modifierProfilAgricole(int $id, array $data)
    {
        $agricole = $this->getById($id);

        return $agricole->update($data);
    }

    public function repondreConsultation(int $consultation_id, string $reponse){
        
    }
    public function consulterConsultation(int $id){
        
    }
    public function refuserConsultation(int $consultation_id){
        
    }
}