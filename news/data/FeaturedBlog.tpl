<?PHP
///////////////////// TEMPLATE FeaturedBlog /////////////////////
$template_active = <<<HTML
<table width="277" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong><span style="line-height:130%"><font face="Georgia" color="#13446A" size="3">{title}</font></span></strong></td>
  </tr>
  <tr>
    <td><strong><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">{author-name}</font></span></strong><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">, {date}</font></span></td>
  </tr>
  <tr>
    <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/fill.png" width="7" height="7" /></td>
  </tr>
  <tr>
    <td><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">{short-story}</font></span></td>
  </tr>
  <tr>
    <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/fill.png" width="7" height="7" /></td>
  </tr>
  <tr>
    <td><strong><span style="line-height:150%"><font face="Arial" color="#333333" size="2">[full-link]Read Post[/full-link]</font></span></strong><span style="line-height:130%"><font face="Arial" color="#333333" size="2"></font></span></td>
  </tr>
  <tr>
    <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/featuredbreaker.png" width="277" height="15" /></td>
  </tr>
</table>
HTML;


$template_full = <<<HTML
<table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td bgcolor="#319BC3"><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/silkyblogosmall.png" width="111" height="30"></td>
            <td align="right"><font face="Arial, Helvetica, sans-serif" color="#FFFFFF" size="3"><strong>Full Story</strong></font></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><strong><span style="line-height:130%"><font face="Georgia" color="#319BC3" size="3">{title}</font></span></strong></td>
              </tr>
              <tr>
                <td><strong><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">{author-name}</font></span></strong><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">, {date}</font></span></td>
              </tr>
              <tr>
                <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/fill.png" width="7" height="7" /></td>
              </tr>
              <tr>
                <td><span style="line-height:130%"><font face="Georgia" color="#333333" size="2">{full-story}</font></span></td>
              </tr>
              <tr>
                <td><img src="http://www.ucllawsociety.co.uk/images/silkyb/fill.png" width="7" height="7" /></td>
              </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
HTML;


$template_comment = <<<HTML

HTML;


$template_form = <<<HTML

HTML;


$template_prev_next = <<<HTML

HTML;
$template_comments_prev_next = <<<HTML

HTML;
?>
