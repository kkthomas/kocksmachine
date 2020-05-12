<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
             'Kk.Kocksmachine',
            'kocksmachine',
            [
                'Machine' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Machine' => ''
            ]
        );
        
        // wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					kocksmachine {

						icon = '. \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath("kocksmachine") . 'Resources/Public/Icons/user_plugin_kocksmachine.svg
						title = Machine
						description = Kocks Machine
						tt_content_defValues {
							CType = list
							list_type = kocksmachine_kocksmachine
						}
					}
				}
				show = *
			}
	   }'
	);
    }
);