<?php
declare(ticks = 1)
	;
class ProcOne extends ProcBasic
{
	private $count=0;

	public function __construct($count)
	{
		$this->count = $count;
	}


	public function run()
	{
			var_dump($this->getCmt('mysqlrd')->query('select 1 from Plan'));
			foreach($this->getCmt('fileOp')->open(LOG."/2014-07-03.error.log") as $line_num => $line)
			{
				echo $line_num."=>".trim($line); echo "\n";
			}
	}

}
