<?php
namespace Kk\Kocksmachine\Controller;

/***
 *
 * This file is part of the "KK Machine" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Thomas Kemendi &lt;kemendi@kreativ-konzept.com&gt;
 *
 ***/

/**
 * MachineController
 */
class MachineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * machineRepository
     *
     * @var \Kk\Kocksmachine\Domain\Repository\MachineRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $machineRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $machines = $this->machineRepository->findAll();
        $this->view->assign('machines', $machines);
    }

    /**
     * action show
     *
     * @param \Kk\Kocksmachine\Domain\Model\Machine $machine
     * @return void
     */
    public function showAction(\Kk\Kocksmachine\Domain\Model\Machine $machine)
    {
        $this->view->assign('machine', $machine);
    }
}
