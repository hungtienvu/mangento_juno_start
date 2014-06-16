<?php
class Nofrills_Booklayout_IndexController  extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		//var_dump(__METHOD__);
		//$block = new Mage_Core_Block_Text();
		//$block->setText("Hello World");
		//echo $block->toHtml();

		//$block = new Mage_Core_Block_Template();
		//$block->setTemplate('helloworld.phtml');
		//echo $block->toHtml();\
		$main_block = new Nofrills_Booklayout_Block_Helloworld();
		echo $main_block->toHtml();
	}

	public function helloblockAction()
	{
		$main_block = new Nofrills_Booklayout_Block_Helloworld();
		echo $main_block->toHtml();
	}

	public function layoutAction()
	{
		//create layout object with instantiated once time
		$layout = Mage::getSingleton('core/layout');
		$block = $layout->createBlock('nofrills_booklayout/helloworld','root');
		echo $layout->addOutputBlock('root')->setDirectOutput(false)->getOutput();
	}

}









