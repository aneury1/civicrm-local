<?php /* Smarty version 2.6.30, created on 2022-10-31 21:57:37
         compiled from CRM/common/navigation.js.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/navigation.js.tpl', 1, false),array('block', 'ts', 'CRM/common/navigation.js.tpl', 31, false),array('function', 'crmURL', 'CRM/common/navigation.js.tpl', 29, false),array('modifier', 'date_format', 'CRM/common/navigation.js.tpl', 54, false),array('modifier', 'json_encode', 'CRM/common/navigation.js.tpl', 57, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>// http://civicrm.org/licensing
<?php ob_start(); ?><?php echo '<ul id="civicrm-menu"><li id="crm-qsearch" class="menumain"><form action="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','h' => 0), $this);?><?php echo '" name="search_block" id="id_search_block" method="post"><div id="quickSearch"><input type="text" class="form-text" id="sort_name_navigation" placeholder="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contacts'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" name="sort_name" style="width: 6em;" /><input type="text" id="sort_contact_id" style="display: none" /><input type="hidden" name="hidden_location" value="1" /><input type="hidden" name="qfKey" value="" /><div style="height:1px; overflow:hidden;"><input type="submit" value="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Go'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" name="_qf_Advanced_refresh" class="crm-form-submit default" /></div></div></form><ul><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" checked="checked" value="" name="quickSearchField"> '; ?><?php if ($this->_tpl_vars['includeEmail']): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Name/Email'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Name'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" value="contact_id" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contact ID'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" value="external_identifier" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'External ID'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" value="first_name" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'First Name'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" value="last_name" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Last Name'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="eml" value="email" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Email'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="phe" value="phone_numeric" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Phone'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="sts" value="street_address" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Street Address'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="sts" value="city" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'City'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="sts" value="postal_code" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Postal Code'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li><li><label class="crm-quickSearchField"><input type="radio" data-tablename="cc" value="job_title" name="quickSearchField"> '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Job Title'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></li></ul></li>'; ?><?php echo $this->_tpl_vars['navigation']; ?><?php echo '</ul>'; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('menuMarkup', ob_get_contents());ob_end_clean(); ?>// <script> Generated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%d %b %Y %H:%M:%S') : smarty_modifier_date_format($_tmp, '%d %b %Y %H:%M:%S')); ?>

<?php echo '
(function($) {
  var menuMarkup = '; ?>
<?php echo json_encode($this->_tpl_vars['menuMarkup']); ?>
;
<?php if ($this->_tpl_vars['config']->userFramework != 'Joomla'): ?><?php echo '
  $(\'body\').append(menuMarkup);

  $(\'#civicrm-menu\').css({position: "fixed", top: "0px"});

  //Track Scrolling
  $(window).scroll(function () {
    $(\'div.sticky-header\').css({top: "23px", position: "fixed"});
  });

  if ($(\'#edit-shortcuts\').length > 0) {
    $(\'#civicrm-menu\').css({\'width\': \'97%\'});
  }
'; ?>
<?php else: ?><?php echo '
  // below div is present in older version of joomla 2.5.x
  var elementExists = $(\'div#toolbar-box div.m\').length;
  if (elementExists > 0) {
    $(\'div#toolbar-box div.m\').html(menuMarkup);
  }
  else {
    $("#crm-nav-menu-container").html(menuMarkup).css({\'padding-bottom\': \'10px\'});
  }
'; ?>
<?php endif; ?><?php echo '
  // CRM-15493 get the current qfKey
  $("input[name=qfKey]", "#quickSearch").val($(\'#civicrm-navigation-menu\').data(\'qfkey\'));

$(\'#civicrm-menu\').ready(function() {
  $(\'#root-menu-div .outerbox\').css({\'margin-top\': \'6px\'});
  $(\'#root-menu-div .menu-ul li\').css({\'padding-bottom\': \'2px\', \'margin-top\': \'2px\'});
  $(\'img.menu-item-arrow\').css({top: \'4px\'});
  $("#civicrm-menu >li").each(function(i){
    $(this).attr("tabIndex",i+2);
  });

  $(\'#sort_name_navigation\')
    .autocomplete({
      source: function(request, response) {
        //start spinning the civi logo
        $(\'.crm-logo-sm\').addClass(\'crm-i fa-spin\');
        var
          option = $(\'input[name=quickSearchField]:checked\'),
          params = {
            name: request.term,
            field_name: option.val(),
            table_name: option.attr("data-tablename")
          };
        CRM.api3(\'contact\', \'getquick\', params).done(function(result) {
          var ret = [];
          if (result.values.length > 0) {
            $(\'#sort_name_navigation\').autocomplete(\'widget\').menu(\'option\', \'disabled\', false);
            $.each(result.values, function(k, v) {
              ret.push({value: v.id, label: v.data});
            });
          } else {
            $(\'#sort_name_navigation\').autocomplete(\'widget\').menu(\'option\', \'disabled\', true);
            var label = option.closest(\'label\').text();
            var msg = ts(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => '%1')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 not found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ', {1: label});
            // Remind user they are not searching by contact name (unless they enter a number)
            if (params.field_name && !(/[\\d].*/.test(params.name))) {
              msg += '; ?>
' <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Did you mean to search by Name/Email instead?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
            }
            ret.push({value: \'0\', label: msg});
          }
          response(ret);
          //stop spinning the civi logo
          $(\'.crm-logo-sm\').removeClass(\'crm-i fa-spin\');
        })
      },
      focus: function (event, ui) {
        return false;
      },
      select: function (event, ui) {
        if (ui.item.value > 0) {
          document.location = CRM.url(\'civicrm/contact/view\', {reset: 1, cid: ui.item.value});
        }
        return false;
      },
      create: function() {
        // Place menu in front
        $(this).autocomplete(\'widget\')
          .addClass(\'crm-quickSearch-results\')
          .css(\'z-index\', $(\'#civicrm-menu\').css(\'z-index\'));
      }
    })
    .keydown(function() {
      $.Menu.closeAll();
    })
    .on(\'focus\', function() {
      setQuickSearchValue();
      if ($(this).attr(\'style\').indexOf(\'14em\') < 0) {
        $(this).animate({width: \'14em\'});
      }
    })
    .on(\'blur\', function() {
      // Shrink if no input and menu is not open
      if (!$(this).val().length && $(this).attr(\'style\').indexOf(\'6em\') < 0 && !$(\'.crm-quickSearchField:visible\', \'#root-menu-div\').length) {
        $(this).animate({width: \'6em\'});
      }
    });
  $(\'.crm-hidemenu\').click(function(e) {
    $(\'#civicrm-menu\').slideUp();
    if ($(\'#crm-notification-container\').length) {
      var alert = CRM.alert('; ?>
'<a href="#" id="crm-restore-menu" style="text-align: center; margin-top: -8px;"><?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Restore CiviCRM Menu<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>'<?php echo ', \'\', \'none\', {expires: 10000});
      $(\'#crm-restore-menu\')
        .button({icons: {primary: \'fa-undo\'}})
        .click(function(e) {
          e.preventDefault();
          alert.close();
          $(\'#civicrm-menu\').slideDown();
        })
        .parent().css(\'text-align\', \'center\').find(\'.ui-button-text\').css({\'padding-top\': \'4px\', \'padding-bottom\': \'4px\'})
      ;
    }
    e.preventDefault();
  });
  function setQuickSearchValue() {
    var $selection = $(\'.crm-quickSearchField input:checked\'),
      label = $selection.parent().text(),
      value = $selection.val();
    // These fields are not supported by advanced search
    if (!value || value === \'first_name\' || value === \'last_name\') {
      value = \'sort_name\';
    }
    $(\'#sort_name_navigation\').attr({name: value, placeholder: label});
  }
  $(\'.crm-quickSearchField\').click(function() {
    setQuickSearchValue();
    $.Menu.closeAll();
    $(\'#sort_name_navigation\').focus().autocomplete("search");
  });
  // Set & retrieve default value
  if (window.localStorage) {
    $(\'.crm-quickSearchField\').click(function() {
      localStorage.quickSearchField = $(\'input\', this).val();
    });
    if (localStorage.quickSearchField) {
      $(\'.crm-quickSearchField input[value=\' + localStorage.quickSearchField + \']\').prop(\'checked\', true);
    }
  }
  // redirect to view page if there is only one contact
  $(\'#id_search_block\').on(\'submit\', function() {
    var $menu = $(\'#sort_name_navigation\').autocomplete(\'widget\');
    if ($(\'li.ui-menu-item\', $menu).length === 1) {
      var cid = $(\'li.ui-menu-item\', $menu).data(\'ui-autocomplete-item\').value;
      if (cid > 0) {
        document.location = CRM.url(\'civicrm/contact/view\', {reset: 1, cid: cid});
        return false;
      }
    }
  });
  // Close menu after selecting an item
  $(\'#root-menu-div\').on(\'click\', \'a\', $.Menu.closeAll);
});
$(\'#civicrm-menu\').menuBar({arrowSrc: CRM.config.resourceBase + \'packages/jquery/css/images/arrow.png\'});
$(window).on("beforeunload", function() {
  $(\'.crm-logo-sm\', \'#civicrm-menu\').addClass(\'crm-i fa-spin\');
});
})(CRM.$);'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>