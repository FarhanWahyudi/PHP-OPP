<?php
    require_once 'data/Programer.php';

    $company = new Company();
    $company->programer = new Programer('farhan');
    var_dump($company);

    $company->programer = new FrontEndProgramer('farhan');
    var_dump($company);

    $company->programer = new BackEndProgramer('farhan');
    var_dump($company);

    sayHelloProgramer(new Programer('farhan'));
    sayHelloProgramer(new FrontEndProgramer('farhan'));
    sayHelloProgramer(new BackEndProgramer('farhan'));
?>