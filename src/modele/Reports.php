<?php

class Reports
{
    private int $id_report;
    private string $name;
    private string $subject;
    private string $email;
    private string $message;

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

    public function getIdReport(): int
    {
        return $this->id_report;
    }

    public function setIdReport(int $id_report): void
    {
        $this->id_report = $id_report;
    }

    public function getName(): int
    {
        return $this->name;
    }

    public function setName(int $name): void
    {
        $this->name = $name;
    }

    public function getSubject(): int
    {
        return $this->subject;
    }

    public function setSubject(int $subject): void
    {
        $this->subject = $subject;
    }

    public function getEmail(): int
    {
        return $this->email;
    }

    public function setEmail(int $email): void
    {
        $this->email = $email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}