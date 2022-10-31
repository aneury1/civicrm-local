<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * CachedCiviContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class CachedCiviContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'angular' => 'getAngularService',
            'asset_builder' => 'getAssetBuilderService',
            'cache.community_messages' => 'getCache_CommunityMessagesService',
            'cache.default' => 'getCache_DefaultService',
            'cache.js_strings' => 'getCache_JsStringsService',
            'cache.settings' => 'getCache_SettingsService',
            'civi.activity.triggers' => 'getCivi_Activity_TriggersService',
            'civi.case.statictriggers' => 'getCivi_Case_StatictriggersService',
            'civi.case.triggers' => 'getCivi_Case_TriggersService',
            'civi.mailing.triggers' => 'getCivi_Mailing_TriggersService',
            'civi_api_kernel' => 'getCiviApiKernelService',
            'civi_container_factory' => 'getCiviContainerFactoryService',
            'civi_token_compat' => 'getCiviTokenCompatService',
            'crm_activity_tokens' => 'getCrmActivityTokensService',
            'crm_contribute_tokens' => 'getCrmContributeTokensService',
            'crm_event_tokens' => 'getCrmEventTokensService',
            'crm_mailing_action_tokens' => 'getCrmMailingActionTokensService',
            'crm_mailing_tokens' => 'getCrmMailingTokensService',
            'crm_member_tokens' => 'getCrmMemberTokensService',
            'cxn_reg_client' => 'getCxnRegClientService',
            'dispatcher' => 'getDispatcherService',
            'httpclient' => 'getHttpclientService',
            'i18n' => 'getI18nService',
            'lockmanager' => 'getLockmanagerService',
            'magic_function_provider' => 'getMagicFunctionProviderService',
            'paths' => 'getPathsService',
            'pear_mail' => 'getPearMailService',
            'psr_log' => 'getPsrLogService',
            'resources' => 'getResourcesService',
            'runtime' => 'getRuntimeService',
            'settings_manager' => 'getSettingsManagerService',
            'sql_triggers' => 'getSqlTriggersService',
            'userpermissionclass' => 'getUserpermissionclassService',
            'usersystem' => 'getUsersystemService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'angular' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Angular\Manager A Civi\Angular\Manager instance.
     */
    protected function getAngularService()
    {
        return $this->services['angular'] = $this->get('civi_container_factory')->createAngularManager();
    }

    /**
     * Gets the 'asset_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\AssetBuilder A Civi\Core\AssetBuilder instance.
     */
    protected function getAssetBuilderService()
    {
        return $this->services['asset_builder'] = new \Civi\Core\AssetBuilder();
    }

    /**
     * Gets the 'cache.community_messages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Utils_Cache_Interface A CRM_Utils_Cache_Interface instance.
     */
    protected function getCache_CommunityMessagesService()
    {
        return $this->services['cache.community_messages'] = \CRM_Utils_Cache::create(array('name' => 'community_messages', 'type' => array(0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache')));
    }

    /**
     * Gets the 'cache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Utils_Cache A CRM_Utils_Cache instance.
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = \CRM_Utils_Cache::singleton();
    }

    /**
     * Gets the 'cache.js_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Utils_Cache_Interface A CRM_Utils_Cache_Interface instance.
     */
    protected function getCache_JsStringsService()
    {
        return $this->services['cache.js_strings'] = \CRM_Utils_Cache::create(array('name' => 'js_strings', 'type' => array(0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache')));
    }

    /**
     * Gets the 'cache.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getCache_SettingsService()
    {
        throw new RuntimeException('You have requested a synthetic service ("cache.settings"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'civi.activity.triggers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers A Civi\Core\SqlTrigger\TimestampTriggers instance.
     */
    protected function getCivi_Activity_TriggersService()
    {
        return $this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity');
    }

    /**
     * Gets the 'civi.case.statictriggers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\SqlTrigger\StaticTriggers A Civi\Core\SqlTrigger\StaticTriggers instance.
     */
    protected function getCivi_Case_StatictriggersService()
    {
        return $this->services['civi.case.statictriggers'] = new \Civi\Core\SqlTrigger\StaticTriggers(array(0 => array('upgrade_check' => array('table' => 'civicrm_case', 'column' => 'modified_date'), 'table' => 'civicrm_case_activity', 'when' => 'AFTER', 'event' => array(0 => 'INSERT'), 'sql' => '
UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.case_id;
'), 1 => array('upgrade_check' => array('table' => 'civicrm_case', 'column' => 'modified_date'), 'table' => 'civicrm_activity', 'when' => 'BEFORE', 'event' => array(0 => 'UPDATE', 1 => 'DELETE'), 'sql' => '
UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);
')));
    }

    /**
     * Gets the 'civi.case.triggers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers A Civi\Core\SqlTrigger\TimestampTriggers instance.
     */
    protected function getCivi_Case_TriggersService()
    {
        return $this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case');
    }

    /**
     * Gets the 'civi.mailing.triggers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers A Civi\Core\SqlTrigger\TimestampTriggers instance.
     */
    protected function getCivi_Mailing_TriggersService()
    {
        return $this->services['civi.mailing.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_mailing', 'Mailing');
    }

    /**
     * Gets the 'civi_api_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\API\Kernel A Civi\API\Kernel instance.
     */
    protected function getCiviApiKernelService()
    {
        return $this->services['civi_api_kernel'] = $this->get('civi_container_factory')->createApiKernel($this->get('dispatcher'), $this->get('magic_function_provider'));
    }

    /**
     * Gets the 'civi_container_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\Container A Civi\Core\Container instance.
     */
    protected function getCiviContainerFactoryService()
    {
        return $this->services['civi_container_factory'] = new \Civi\Core\Container();
    }

    /**
     * Gets the 'civi_token_compat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Token\TokenCompatSubscriber A Civi\Token\TokenCompatSubscriber instance.
     */
    protected function getCiviTokenCompatService()
    {
        return $this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber();
    }

    /**
     * Gets the 'crm_activity_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Activity_Tokens A CRM_Activity_Tokens instance.
     */
    protected function getCrmActivityTokensService()
    {
        return $this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens();
    }

    /**
     * Gets the 'crm_contribute_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Contribute_Tokens A CRM_Contribute_Tokens instance.
     */
    protected function getCrmContributeTokensService()
    {
        return $this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens();
    }

    /**
     * Gets the 'crm_event_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Event_Tokens A CRM_Event_Tokens instance.
     */
    protected function getCrmEventTokensService()
    {
        return $this->services['crm_event_tokens'] = new \CRM_Event_Tokens();
    }

    /**
     * Gets the 'crm_mailing_action_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Mailing_ActionTokens A CRM_Mailing_ActionTokens instance.
     */
    protected function getCrmMailingActionTokensService()
    {
        return $this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens();
    }

    /**
     * Gets the 'crm_mailing_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Mailing_Tokens A CRM_Mailing_Tokens instance.
     */
    protected function getCrmMailingTokensService()
    {
        return $this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens();
    }

    /**
     * Gets the 'crm_member_tokens' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Member_Tokens A CRM_Member_Tokens instance.
     */
    protected function getCrmMemberTokensService()
    {
        return $this->services['crm_member_tokens'] = new \CRM_Member_Tokens();
    }

    /**
     * Gets the 'cxn_reg_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Cxn\Rpc\RegistrationClient A Civi\Cxn\Rpc\RegistrationClient instance.
     */
    protected function getCxnRegClientService()
    {
        return $this->services['cxn_reg_client'] = \CRM_Cxn_BAO_Cxn::createRegistrationClient();
    }

    /**
     * Gets the 'dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\CiviEventDispatcher A Civi\Core\CiviEventDispatcher instance.
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = $this->get('civi_container_factory')->createEventDispatcher($this);

        $instance->addListenerService('hook_civicrm_triggerInfo', array(0 => 'civi.mailing.triggers', 1 => 'onTriggerInfo'), 0);
        $instance->addListenerService('hook_civicrm_triggerInfo', array(0 => 'civi.activity.triggers', 1 => 'onTriggerInfo'), 0);
        $instance->addListenerService('hook_civicrm_triggerInfo', array(0 => 'civi.case.triggers', 1 => 'onTriggerInfo'), 0);
        $instance->addListenerService('hook_civicrm_triggerInfo', array(0 => 'civi.case.statictriggers', 1 => 'onTriggerInfo'), 0);
        $instance->addSubscriberService('civi_token_compat', 'Civi\\Token\\TokenCompatSubscriber');
        $instance->addSubscriberService('crm_mailing_action_tokens', 'CRM_Mailing_ActionTokens');
        $instance->addSubscriberService('crm_activity_tokens', 'CRM_Activity_Tokens');
        $instance->addSubscriberService('crm_contribute_tokens', 'CRM_Contribute_Tokens');
        $instance->addSubscriberService('crm_event_tokens', 'CRM_Event_Tokens');
        $instance->addSubscriberService('crm_mailing_tokens', 'CRM_Mailing_Tokens');
        $instance->addSubscriberService('crm_member_tokens', 'CRM_Member_Tokens');

        return $instance;
    }

    /**
     * Gets the 'httpclient' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Utils_HttpClient A CRM_Utils_HttpClient instance.
     */
    protected function getHttpclientService()
    {
        return $this->services['httpclient'] = \CRM_Utils_HttpClient::singleton();
    }

    /**
     * Gets the 'i18n' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Core_I18n A CRM_Core_I18n instance.
     */
    protected function getI18nService()
    {
        return $this->services['i18n'] = \CRM_Core_I18n::singleton();
    }

    /**
     * Gets the 'lockmanager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getLockmanagerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("lockmanager"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'magic_function_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\API\Provider\MagicFunctionProvider A Civi\API\Provider\MagicFunctionProvider instance.
     */
    protected function getMagicFunctionProviderService()
    {
        return $this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider();
    }

    /**
     * Gets the 'paths' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getPathsService()
    {
        throw new RuntimeException('You have requested a synthetic service ("paths"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'pear_mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mail A Mail instance.
     */
    protected function getPearMailService()
    {
        return $this->services['pear_mail'] = \CRM_Utils_Mail::createMailer();
    }

    /**
     * Gets the 'psr_log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Core_Error_Log A CRM_Core_Error_Log instance.
     */
    protected function getPsrLogService()
    {
        return $this->services['psr_log'] = new \CRM_Core_Error_Log();
    }

    /**
     * Gets the 'resources' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CRM_Core_Resources A CRM_Core_Resources instance.
     */
    protected function getResourcesService()
    {
        return $this->services['resources'] = \CRM_Core_Resources::singleton();
    }

    /**
     * Gets the 'runtime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRuntimeService()
    {
        throw new RuntimeException('You have requested a synthetic service ("runtime"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'settings_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getSettingsManagerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("settings_manager"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'sql_triggers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Civi\Core\SqlTriggers A Civi\Core\SqlTriggers instance.
     */
    protected function getSqlTriggersService()
    {
        return $this->services['sql_triggers'] = new \Civi\Core\SqlTriggers();
    }

    /**
     * Gets the 'userpermissionclass' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getUserpermissionclassService()
    {
        throw new RuntimeException('You have requested a synthetic service ("userpermissionclass"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'usersystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getUsersystemService()
    {
        throw new RuntimeException('You have requested a synthetic service ("usersystem"). The DIC does not know how to construct this service.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'civicrm_base_path' => '/var/www/html/wordpress/wp-content/plugins/civicrm/civicrm',
        );
    }
}
