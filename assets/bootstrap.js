// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
import { startStimulusApp } from "@symfony/stimulus-bridge";
export const app=startStimulusApp(require.context(
    '@symfony/stumulus-bridge/lazy-controller-loader !./controllers',
    true,
    /\.[jt]sx?$/
));