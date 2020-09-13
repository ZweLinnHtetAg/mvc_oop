<?php

class IncomeModel {
    protected $id;
    protected $category_id;
    protected $amount;
    protected $user_id;
    protected $date;

    public function setId($id)
    {
        $this->id  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCategory($category_id)
    {
        $this->category_id = $category_id;
    }

    public function getCategory()
    {
        return $this->category_id;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setUser($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUser()
    {
        return $this->user_id;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function toArray()
    {
        return [
            'category_id' => $this->getCategory(),
            'amount' => $this->getAmount(),
            'user_id' => $this->getUser(),
            'date'=> $this->getDate() 
        ];
    }
}




?>