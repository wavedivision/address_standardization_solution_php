<?php /** @package AddressStandardizationSolution_Test */

/**
 * Gather the PHPUnit Framework
 */
require_once 'PHPUnit/Framework.php';

/**#@+
 * Gather the test files in this directory
 */
require_once $GLOBALS['dir'] . '/AddressLineStandardizationTest.php';
/**#@-*/


/**
 * Runs all Address Standardization Solution tests
 *
 * Usage:  phpunit AllTests
 *
 * @package AddressStandardizationSolution_Test
 */
class AllTests {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('Address Standardization Solution Unit Tests');

		$suite->addTestSuite('AddressLineStandardizationTest');

		return $suite;
	}
}
