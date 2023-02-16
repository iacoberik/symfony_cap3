<?php

namespace ContainerS1r76IP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTalkToMeCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\TalkToMeCommand' shared autowired service.
     *
     * @return \App\Command\TalkToMeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/TalkToMeCommand.php';

        $container->privates['App\\Command\\TalkToMeCommand'] = $instance = new \App\Command\TalkToMeCommand(($container->privates['App\\Service\\MixRepository'] ?? $container->load('getMixRepositoryService')));

        $instance->setName('app:talk-to-me');
        $instance->setDescription('A self-aware command that can do... only one thing.');

        return $instance;
    }
}