<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

if ((!defined('ABS_PATH'))) exit('ABS_PATH is not loaded. Direct access is not allowed.');
if (!OC_ADMIN) exit('User access is not allowed.'); ?>
<h2 class="render-title <?php echo (osc_get_preference('footer_link', 'bender') ? '' : 'separate-top'); ?>"><?php _e('Theme settings', BENDERBS_THEME_FOLDER); ?></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/'.BENDERBS_THEME_FOLDER.'/admin/settings.php'); ?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="settings" />
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><?php _e('Search placeholder', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="keyword_placeholder" value="<?php echo osc_esc_html( osc_get_preference('keyword_placeholder', 'bender') ); ?>"></div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Show lists as:', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <select name="defaultShowAs@all">
                        <option value="gallery" <?php if (benderbs_default_show_as() == 'gallery') echo 'selected="selected"'; ?>><?php _e('Gallery',BENDERBS_THEME_FOLDER); ?></option>
                        <option value="list" <?php if (benderbs_default_show_as() == 'list') echo 'selected="selected"';  ?>><?php _e('List',BENDERBS_THEME_FOLDER); ?></option>
                    </select>
                </div>
            </div>
        </div>
    </fieldset>

    <!--<h2 class="render-title"><?php _e('Right-To-Left (RTL)', BENDERBS_THEME_FOLDER); ?></h2>
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><?php _e('Enable Right-To-Left', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <div class="form-label-checkbox">
                        <label><input type="checkbox" <?php echo ( (osc_get_preference('rtl', 'bender') != '0') ? 'checked="checked"' : ''); ?> name="rtl" value="1" /> <?php _e('enable/disable', BENDERBS_THEME_FOLDER); ?></label>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>-->

    <h2 class="render-title"><?php _e('Location input', BENDERBS_THEME_FOLDER); ?></h2>
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><?php _e('Show location input as:', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <select name="defaultLocationShowAs">
                        <option value="dropdown" <?php if (benderbs_default_location_show_as() == 'dropdown') echo 'selected="selected"'; ?>><?php _e('Dropdown',BENDERBS_THEME_FOLDER); ?></option>
                        <option value="autocomplete" <?php if (benderbs_default_location_show_as() == 'autocomplete') echo 'selected="selected"'; ?>><?php _e('Autocomplete',BENDERBS_THEME_FOLDER); ?></option>
                    </select>
                </div>
            </div>
        </div>
    </fieldset>

    <h2 class="render-title"><?php _e('Ads management', BENDERBS_THEME_FOLDER); ?></h2>
    <div class="form-row">
        <div class="form-label"></div>
        <div class="form-controls">
            <p><?php _e('In this section you can configure your site to display ads and start generating revenue.', BENDERBS_THEME_FOLDER); ?><br/><?php _e('If you are using an online advertising platform, such as Google Adsense, copy and paste here the provided code for ads.', BENDERBS_THEME_FOLDER); ?></p>
        </div>
    </div>
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><?php _e('Header 728x90', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="header-728x90"><?php echo osc_esc_html( osc_get_preference('header-728x90', 'bender') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the top of your website, next to the site title and above the search results. Note that the size of the ad has to be 728x90 pixels.', BENDERBS_THEME_FOLDER); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Homepage 728x90', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="homepage-728x90"><?php echo osc_esc_html( osc_get_preference('homepage-728x90', 'bender') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the main site of your website. It will appear both at the top and bottom of your site homepage. Note that the size of the ad has to be 728x90 pixels.', BENDERBS_THEME_FOLDER); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Search results 728x90 (top of the page)', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-results-top-728x90"><?php echo osc_esc_html( osc_get_preference('search-results-top-728x90', 'bender') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on top of the search results of your site. Note that the size of the ad has to be 728x90 pixels.', BENDERBS_THEME_FOLDER); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Search results 728x90 (middle of the page)', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-results-middle-728x90"><?php echo osc_esc_html( osc_get_preference('search-results-middle-728x90', 'bender') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown among the search results of your site. Note that the size of the ad has to be 728x90 pixels.', BENDERBS_THEME_FOLDER); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Sidebar 300x250', BENDERBS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="sidebar-300x250"><?php echo osc_esc_html( osc_get_preference('sidebar-300x250', 'bender') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the right sidebar of your website, on the product detail page. Note that the size of the ad has to be 300x350 pixels.', BENDERBS_THEME_FOLDER); ?></div>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" value="<?php _e('Save changes', BENDERBS_THEME_FOLDER); ?>" class="btn btn-submit">
            </div>
        </div>
    </fieldset>
</form>