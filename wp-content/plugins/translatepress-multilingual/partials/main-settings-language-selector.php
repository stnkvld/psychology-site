<tr>
    <th scope="row"> <?php _e( 'All Languages', 'translatepress-multilingual' ) ?> </th>
    <td>
        <table id="trp-languages-table">
            <thead>
            <tr>
                <th colspan="2"><?php _e( 'Language', 'translatepress-multilingual' ); ?></th>
                <th><?php _e( 'Slug', 'translatepress-multilingual' ); ?></th>
            </tr>
            </thead>
            <tbody id="trp-sortable-languages">

            <?php

            // we should always have at least two languages in free version.
            // edge case when enable multiple language addon, delete all languages and then disable multiple language addon. The free version won't be able to have two languages.
            if( count($this->settings['translation-languages']) < 2 )
                $this->settings['translation-languages'][] = '';

            // we should force only two languages in the free version
            $translation_languages = array();
            foreach ($this->settings['translation-languages'] as $lang ){
                if ( ( count($translation_languages) == 0 ) && ( $lang != $this->settings['default-language'] ) ){
                    $translation_languages[] = $lang;
                } elseif( $lang == $this->settings['default-language']) {
                    $translation_languages[] = $lang;
                } elseif( in_array($this->settings['default-language'], $translation_languages ) && count($translation_languages) == 1 ){
                    $translation_languages[] = $lang;
                }
            }

            foreach ($translation_languages as $selected_language_code ){
                $default_language = ( $selected_language_code == $this->settings['default-language'] );?>
                <tr class="trp-language">
                    <td><span class="trp-sortable-handle"></span></td>
                    <td>
                        <select name="trp_settings[translation-languages][]" class="trp-select2 trp-translation-language" <?php echo ( $default_language ) ? 'disabled' : '' ?>>
                            <option value=""><?php _e( 'Choose...', 'translatepress-multilingual' );?></option>
                            <?php foreach( $languages as $language_code => $language_name ){ ?>
                                <option title="<?php echo $language_code; ?>" value="<?php echo $language_code; ?>" <?php echo ( $language_code == $selected_language_code ) ? 'selected' : ''; ?>>
                                    <?php echo ( $default_language ) ? 'Default: ' : ''; ?>
                                    <?php echo $language_name; ?>
                                </option>
                            <?php }?>
                        </select>
                        <input type="hidden" class="trp-translation-published" name="trp_settings[publish-languages][]" value="<?php echo $selected_language_code;?>" />
                        <?php if ( $default_language ) { ?>
                            <input type="hidden" class="trp-hidden-default-language" name="trp_settings[translation-languages][]" value="<?php echo $selected_language_code;?>" />
                        <?php } ?>
                    </td>
                    <td>
                        <input class="trp-language-slug" name="trp_settings[url-slugs][<?php echo $selected_language_code ?>]" type="text" style="text-transform: lowercase;" value="<?php echo $this->url_converter->get_url_slug( $selected_language_code, false ); ?>">
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <div id="trp-new-language">
            <select id="trp-select-language" class="trp-select2 trp-translation-language" >
                <option value=""><?php _e( 'Choose...', 'translatepress-multilingual' );?></option>
                <?php foreach( $languages as $language_code => $language_name ){ ?>
                    <option title="<?php echo $language_code; ?>" value="<?php echo $language_code; ?>">
                        <?php echo $language_name; ?>
                    </option>
                <?php }?>
            </select>
            <button type="button" id="trp-add-language" class="button-secondary"><?php _e( 'Add', 'translatepress-multilingual' );?></button>
        </div>
        <p class="description">
            <?php
            _e( 'Select the language you wish to make your website available in.', 'translatepress-multilingual');
            ?>
        </p>
        <p class="trp-upsell-multiple-languages" style="display: none;">
            <?php
            $url = trp_add_affiliate_id_to_link('https://translatepress.com/?utm_source=wpbackend&utm_medium=clientsite&utm_content=multiple_languages&utm_campaign=tpfree');
            $link = sprintf( wp_kses( __( 'To add <strong>more then two languages</strong> and support for SEO Title, Description, Slug and more checkout <a href="%s" class="button button-primary" target="_blank" title="TranslatePress Pro">TranslatePress PRO</a>', 'translatepress-multilingual' ), array( 'strong' => array(), 'br' => array(), 'a' => array( 'href' => array(), 'title' => array(), 'target'=> array(), 'class' => array() ) ) ), esc_url( $url ) );
            $link .= '<br/>' . __('Not only you are getting extra features and premium support, you also help fund the future development of TranslatePress.', 'translatepress-multilingual');
            echo $link;
            ?>
        </p>
    </td>
</tr>