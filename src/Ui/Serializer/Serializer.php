<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 12/11/18
 * Time: 14:40
 */

namespace App\Ui\Serializer;




use App\Domaine\Entity\Invoce;

class Serializer
{
    public function serialize(\App\Domaine\Collection\Invoce $findAll){
        $data = array_values((array) $findAll)[0];
        return array_map([$this , 'serializeObject'],  $data);
    }
    private function serializeObject(Invoce $invoce): array
    {
            $closure = \Closure::bind(\Closure::fromCallable(function() {
                return [
                    'id' => $this->uuid->toString(),
                    'creation_date' => $this->creationDate->format(\DateTimeInterface::ATOM)
                ];
            }), $invoce, Invoce::class);
            return $closure();
    }

}