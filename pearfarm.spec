<?php

$spec = Pearfarm_PackageSpec::create(array(Pearfarm_PackageSpec::OPT_BASEDIR => dirname(__FILE__)))
             ->setName('php_github')
             ->setChannel('jetviper21.pearfarm.org')
             ->setSummary('Github version 2 api wrapper for php 5.3 http://github.com/jetviper21/php_github')
             ->setDescription('Github version 2 api wrapper for php 5.3 http://github.com/jetviper21/php_github')
             ->setReleaseVersion('0.0.2')
             ->setReleaseStability('alpha')
             ->setApiVersion('0.0.2')
             ->setApiStability('alpha')
             ->setLicense(Pearfarm_PackageSpec::LICENSE_MIT)
             ->setNotes('Initial release.')
             ->addMaintainer('lead', 'scott davis', 'jetviper21', 'jetviper21@gmail.com')
             ->addGitFiles()
             ;