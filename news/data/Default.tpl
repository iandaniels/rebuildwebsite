<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
<div style="text-align:justify"><p style="line-height:150%"><font face="Arial, Helvetica, sans-serif" color="#319BC3" size="3"><strong>{title}</strong></font><br>
    <font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"><em>by {author-name}<br>
    </em>{short-story}<br>
    [full-link]Read more[/full-link] | Posted {date}</font></p>
</div>
HTML;


$template_full = <<<HTML
<div style="text-align:justify">
  <p style="line-height:150%"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"><a href="http://www.ucllawsociety.co.uk/silkyb.php">< Back</a></font>  <br>
    <font face="Arial, Helvetica, sans-serif" color="#319BC3" size="3"><strong>{title}</strong></font><br>
    <font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"><em>by {author-name}<br>
    </em>{full-story}<br>
  {comments-num} comments | Posted {date}</font></p>
</div>
HTML;


$template_comment = <<<HTML
<div style="width: 400px; margin-bottom:20px;">

<div style="border-bottom:1px solid black;"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"><em>by </em>{author} | {date}</font></div>

<div style="padding:2px; background-color:#F9F9F9"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">{comment}</font></div>

</div>
HTML;


$template_form = <<<HTML
<table border="0" width="370" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">Name:</font></td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">E-mail:</font></td>
      <td><input type="text" name="mail"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"> (optional)</font></td>
    </tr>
    <tr><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">
      <td>Smile:</td>
      <td>{smilies}</td></font>
    </tr>
    <tr>
      <td colspan="2">
      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input type="submit" name="submit" value="Add My Comment">
      <input type=checkbox name=CNremember  id=CNremember value=1><label for=CNremember><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"> Remember Me</font></label> |
  <a href="javascript:CNforget();"><font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">Forget Me</font></a>
      </td>
    </tr>
  </table>
HTML;


$template_prev_next = <<<HTML
<font face="Arial, Helvetica, sans-serif" color="#333333" size="-1">
<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p></font>
HTML;
$template_comments_prev_next = <<<HTML
<font face="Arial, Helvetica, sans-serif" color="#333333" size="-1"><p align="center">[prev-link]<< Older[/prev-link] ({pages}) [next-link]Newest >>[/next-link]</p></font>
HTML;
?>
