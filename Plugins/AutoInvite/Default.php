<?php
/**
 *	AutoInvite class for OUTRAGEbot.
 *
 *	@ignore
 *	@copyright None
 *	@package OUTRAGEbot
 */


class AutoInvite extends Plugins
{
	private
		$iBindID = -1;
		
	function onConstruct()
	{
		/* Called when the plugin is constructed. */
		$this->iBindID = $this->bindCreate('INVITE', 'onInvite', array(2, 3));
	}
	
	function onDestruct()
	{
		/* Called when the plugin is destructed. */
		$this->bindDelete($this->iBindID);
	}
	
	function onInvite($sNickname, $sChannel)
	{
		if($sNickname == $this->getChildConfig('nickname'))
		{
			$this->sendRaw("JOIN {$sChannel}", SEND_DIST);
		}
	}
}
		
?>
