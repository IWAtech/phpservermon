<?php

namespace psm\Module\Server\Controller;
use psm\Service\Database;

/**
 * Dashboard module
 */
class DashboardController extends StatusController {

	function __construct(Database $db, \Twig_Environment $twig) {
		parent::__construct($db, $twig);

		$this->setMinUserLevelRequired(PSM_USER_ANONYMOUS);
	}

	protected function executeIndex() {
		$response = parent::executeIndex();

		$this->twig->addGlobal('subtitle', psm_get_lang('menu', 'server_dashboard'));
		$this->setHeaderAccessories('');

		return $response;
	}
}
