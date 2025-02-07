<?php

class ReportsRepository {
    private $bdd;

    function __construct() {
        $this->bdd = new Config();
    }

    public function getReports() {
        return  $this->bdd->connexion()->query("SELECT * FROM reports")->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getReportsObj() {
        $reports =  $this->bdd->connexion()->query("SELECT * FROM reports")->fetchAll(PDO::FETCH_ASSOC);
        $reportObj = array();
        foreach ($reports as $report) {
            $reportObj[] = new Reports($report);

        }
        return $reportObj;
    }
    public function getReportById($id) {
        $reports=  $this->bdd->connexion()->prepare("SELECT * FROM reports WHERE id_report = :id");
        $reports->execute(["id"=>$id]);
        $reportObj= new Reports($reports->fetch(PDO::FETCH_ASSOC));
        return $reportObj;
    }

}