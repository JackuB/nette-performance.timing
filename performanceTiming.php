<?php
/**
 * performance.timing for Debugger Bar Panel
 * @author Jakub Mikuláš <jakub@jedenbod.cz>
 * @see https://github.com/JackuB/nette-performance.timing
 */
final class performanceTiming extends \Nette\Application\UI\Control implements \Nette\Diagnostics\IBarPanel
{
	/**
	 * Html code for Debugger Bar Tab
	 * @author Jakub Mikuláš <jakub@jedenbod.cz>
	 * @return string
	 */
	public function getTab()
	{
		$template = $this->getFileTemplate(__DIR__.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'tab.latte');
		return $template;
	}

	/**
	 * Html code for Debugger Bar Panel
	 * @author Jakub Mikuláš <jakub@jedenbod.cz>
	 * @return string
	 */
	public function getPanel()
	{
		$template = $this->getFileTemplate(__DIR__.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'panel.latte');
		return $template;
	}
}
