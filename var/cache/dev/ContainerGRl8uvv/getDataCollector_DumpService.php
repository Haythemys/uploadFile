<?php

namespace ContainerGRl8uvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataCollector_DumpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';

        return $container->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), 'UTF-8', NULL, ($container->privates['var_dumper.server_connection'] ?? $container->load('getVarDumper_ServerConnectionService')));
    }
}
