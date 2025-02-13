<?php

class Reports
{
    private  $id_report;
    private  $name;
    private  $subject;
    private  $email;
    private  $message;

    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }


    }

    public function getIdReport()
    {
        return $this->id_report;
    }

    public function setIdReport(int $id_report)
    {
        $this->id_report = $id_report;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function getEmail()
    {
        return $this->email;
    }

        public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }
}