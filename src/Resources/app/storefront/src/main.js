import PagePlugin from "./page-plugin/page-plugin.plugin";

const PluginManager = window.PluginManager;
PluginManager.register('PagePlugin', PagePlugin, '[data-page-plugin]');