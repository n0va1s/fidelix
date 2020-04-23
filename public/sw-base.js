//https://shareurcodes.com/blog/how-to-easily-convert-your-existing-laravel-application-into-a-progressive-web-app-by-using-workbox
importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');

if (workbox) {
    console.log('Workbox is loaded');
    workbox.core.setCacheNameDetails({
        prefix: 'fidelix'
    });

    // 1. css
    workbox.routing.registerRoute(
        new RegExp('\.css$'),
        new workbox.strategies.CacheFirst({
            cacheName: 'fidelix-stylesheets',
            plugins: [
                new workbox.expiration.ExpirationPlugin({
                    maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
                    maxEntries: 20, // only cache 20 request
                    purgeOnQuotaError: true
                })
            ]
        })
    );

    // 2. images
    workbox.routing.registerRoute(
        new RegExp('\.(png|svg|jpg|jpeg)$'),
        new workbox.strategies.CacheFirst({
            cacheName: 'fidelix-images',
            plugins: [
                new workbox.expiration.ExpirationPlugin({
                    maxAgeSeconds: 60 * 60 * 24 * 7,
                    maxEntries: 50,
                    purgeOnQuotaError: true
                })
            ]
        })
    );

    //Giving Offline Support with a fallback page
    const networkFirstHandler = new workbox.strategies.NetworkFirst({
        cacheName: 'fidelix-dynamic',
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 10
            }),
            new workbox.cacheableResponse.CacheableResponsePlugin({
                statuses: [200]
            })
        ]
    });

    const FALLBACK_URL = workbox.precaching.getCacheKeyForURL('/offline.html');
    const matcher = ({
        event
    }) => event.request.mode === 'navigate';
    const handler = args =>
        networkFirstHandler
        .handle(args)
        .then(response => response || caches.match(FALLBACK_URL))
        .catch(() => caches.match(FALLBACK_URL));

    workbox.routing.registerRoute(matcher, handler);

    workbox.precaching.precacheAndRoute(self.__WB_MANIFEST);

    // add offline analytics
    workbox.googleAnalytics.initialize();

    /* Install a new service worker and have it update
    and control a web page as soon as possible
    */

    workbox.core.skipWaiting();
    workbox.core.clientsClaim();

} else {
    console.log('Oops! Workbox didnt load');
}
