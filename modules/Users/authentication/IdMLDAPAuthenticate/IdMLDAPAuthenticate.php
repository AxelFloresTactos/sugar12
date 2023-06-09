<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
use Sugarcrm\Sugarcrm\IdentityProvider\Authentication\Config;

/**
 * IdM LDAP login
 */
class IdMLDAPAuthenticate extends BaseAuthenticate implements LoginInterface
{
    /**
     * AuthN user over ldap service.
     *
     * @inheritdoc
     */
    public function loginAuthenticate($username, $password, $fallback = false, array $params = [])
    {
        error_log('TCT - Start LDAP');
        error_log($username);
        error_log($password);
        error_log($fallback);
        //error_log(print_r($params,true));
        
        $authManager = $this->getAuthProviderBuilder(new Config(\SugarConfig::getInstance()))->buildAuthProviders();
        //error_log(print_r($authManager,true));
        $tokenFactory = $this->getUsernamePasswordTokenFactory($username, $password, $params);
        //error_log(print_r($tokenFactory,true));
        $ldapToken = $tokenFactory->createLdapAuthenticationToken();
        //error_log(print_r($ldapToken,true));
        $localToken = $tokenFactory->createLocalAuthenticationToken();
        //error_log(print_r($localToken,true));

        $mixedToken = $tokenFactory->createMixedAuthenticationToken();
        $mixedToken->addToken($ldapToken);
        $mixedToken->addToken($localToken);

        $token = $authManager->authenticate($mixedToken);
        return $token && $token->isAuthenticated();
        error_log('TCT - End LDAP');
    }
}
