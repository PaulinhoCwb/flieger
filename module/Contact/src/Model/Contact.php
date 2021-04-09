<?php 

namespace Contact\Model;

class Contact
{
    public $id;
    public $name;
    public $last_name;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->name = !empty($data['name']) ? $data['name'] : null;
        $this->last_name  = !empty($data['last_name']) ? $data['last_name'] : null;
    }
}