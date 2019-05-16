<?php
/**
 * Class WPML_TemplateTag_Mailto
 *
 * @package  WPML
 * @category WordPress Plugins
 * @version  2.1.7
 * @author   WebFactory Ltd
 * @link     https://www.webfactoryltd.com/
 * @link     https://wordpress.org/plugins/wp-mailto-links/
 * @license  Dual licensed under the MIT and GPLv2+ licenses
 */
final class WPML_TemplateTag_Mailto extends WPRun_BaseAbstract_0x5x0
{

    /**
     * Create template tag "wpml_mailto()"
     */
    protected function init()
    {
        $this->createTemplateTag('wpml_mailto', $this->getCallback('mailto'));
    }

    /**
     * Handle template tag
     * @param string $email
     * @param string $display
     * @param array  $atts
     * @return string
     */
    protected function mailto($email, $display = null, $atts = array())
    {
        $emailEncoder = $this->getArgument(0);

        if (is_array($display)) {
            // backwards compatibility (old params: $display, $attrs = array())
            $atts   = $display;
            $display = $email;
        } else {
            $atts['href'] = 'mailto:'.$email;
        }

        return $emailEncoder->protectedMailto($display, $atts);
    }

}

/*?>*/
