<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Kocksmachine',
            'kocksmachine',
            'Machine'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile("kocksmachine", 'Configuration/TypoScript', 'KK Kocksmachine');

         \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kocksmachine_domain_model_timeline');

    },
    $_EXTKEY
);
