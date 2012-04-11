<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>
<p><object width="100%" height="25" class="hark_player"><param name="movie" value="http://cdn.hark.com/swfs/player_bar.swf?pid=flqpsjkbhv"/><param name="allowscriptaccess" value="always"/><param name="allownetworking" value="all"/><param name="wmode" value="transparent"/><embed src="http://cdn.hark.com/swfs/player_bar.swf?pid=flqpsjkbhv" type="application/x-shockwave-flash" allowscriptaccess="always" width="100%" height="25" wmode="transparent"></embed></object><br/><a href="http://www.hark.com/clips/flqpsjkbhv-the-a-team-theme-song-instrumental" style="font-size: 9px; color: #ddd;" title="Listen to The A-Team Theme Song (Instrumental) on Hark.com">The A-Team Theme Song (Instrumental)</a></p>
<p>You may change the content of this page by modifying the following two files:</p>
<p><object width="100%" height="25" class="hark_player"><param name="movie" value="http://cdn.hark.com/swfs/player_bar.swf?pid=flqpsjkbhv"/><param name="allowscriptaccess" value="always"/><param name="allownetworking" value="all"/><param name="wmode" value="transparent"/><embed src="http://cdn.hark.com/swfs/player_bar.swf?pid=flqpsjkbhv" type="application/x-shockwave-flash" allowscriptaccess="always" width="100%" height="25" wmode="transparent"></embed></object><br/><a href="http://www.hark.com/clips/flqpsjkbhv-the-a-team-theme-song-instrumental" style="font-size: 9px; color: #ddd;" title="Listen to The A-Team Theme Song (Instrumental) on Hark.com">The A-Team Theme Song (Instrumental)</a></p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<?php $this->widget('application.extensions.WSocialButton', array('style'=>'box'));?>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>