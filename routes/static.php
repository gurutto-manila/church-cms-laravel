<?php

/* SEO Pages */
Route::view('/about','about')->name('about');
Route::view('/features', 'seo-pages.features')->name('features');
Route::view('/getting-started', 'seo-pages.getting-started')->name('getting-started');
Route::view('/preset-demo', 'seo-pages.preset-demo')->name('preset-demo');
Route::view('/contact', 'seo-pages.contact')->name('contact');
Route::view('/downloads', 'seo-pages.downloads')->name('downloads');
Route::view('/privacy-policy','seo-pages.privacy-policy')->name('privacy-policy');
Route::view('/terms-of-service','seo-pages.terms-of-service')->name('tos');
Route::view('/cookie-policy','seo-pages.cookie-policy')->name('cookie-policy');
Route::view('/online-church-manager-software','seo-pages.self-hosted')->name('self-hosted');
Route::view('/free-open-sourcechurch-manager-software','seo-pages.free-license')->name('free-license');
Route::view('/church-website-design', 'seo-pages.church-website-design')->name('church-website-design');



/* Resource Pages */
Route::view('/resources', 'blog-pages.___index')->name('resources');
Route::view('/resources/church-website-builder', 'blog-pages.why-website')->name('church-website-builder');
Route::view('/resources/church-mobile-app', 'blog-pages.adv-mobile-app')->name('church-mobile-app');
Route::view('/resources/church-membership-management-software', 'blog-pages.membership-management')->name('membership-management');
Route::view('/resources/dedicated-mobile-app-for-churches', 'blog-pages.dedicated-mobile-app')->name('dedicated-mobile-app');
Route::view('/resources/cloud-storage-for-churches', 'blog-pages.cloud-storage')->name('cloud-storage');
Route::view('/resources/live-streaming-for-churches', 'blog-pages.live-streaming')->name('live-streaming');

Route::view('/resources/six-ways-to-promote-your-church', 'blog-pages.six-ways-to-promote-church')->name('six-ways-to-promote-your-church');
Route::view('/resources/questions-to-ask', 'blog-pages.questions-to-ask')->name('questions-to-ask');
Route::view('/resources/convince-your-team-for-church', 'blog-pages.convince-your-team')->name('convince-your-team-for-church');
Route::view('/resources/SEO-tips-for-church', 'blog-pages.seo-tips')->name('SEO-tips-for-church');
Route::view('/resources/metrics-for-church', 'blog-pages.metrics')->name('metrics-for-church');
Route::view('/resources/five-ways-to-engage', 'blog-pages.five-ways-to-engage')->name('five-ways-to-engage');
Route::view('/resources/track-churchcms-attendance', 'blog-pages.track-churchcms-attendance')->name('track-churchcms-attendance');
Route::view('/resources/how-to-make-your-church-more-automated', 'blog-pages.how-to-make-your-church-more-automated')->name('how-to-make-your-church-more-automated');
Route::view('/resources/should-my-church-have-a-facebook-group', 'blog-pages.should-my-church-have-a-facebook-group')->name('should-my-church-have-a-facebook-group');
Route::view('/resources/Is-there-a-demand-for-sermon-video-content-in-your-church', 'blog-pages.Is-there-a-demand-for-sermon-video-content-in-your-church')->name('Is-there-a-demand-for-sermon-video-content-in-your-church');
Route::view('/resources/Top-important-things-to-look-for-in-a-church-app', 'blog-pages.Top-important-things-to-look-for-in-a-church-app')->name('Top-important-things-to-look-for-in-a-church-app');
Route::view('/resources/Features-of-Church-App-Panel', 'blog-pages.Features-of-Church-App-Panel')->name('Features-of-Church-App-Panel');
Route::view('/resources/How-to-Create-a-Church-Mobile-App', 'blog-pages.How-to-Create-a-Church-Mobile-App')->name('How-to-Create-a-Church-Mobile-App');
Route::view('/resources/The-10-Best-Church-App-Features-you-Need', 'blog-pages.The-10-Best-Church-App-Features-you-Need')->name('The-10-Best-Church-App-Features-you-Need');
Route::view('/resources/A-Guide-to-Using-Church-Database-Software-for-More-Effective-Ministry', 'blog-pages.A-Guide-to-Using-Church-Database-Software-for-More-Effective-Ministry')->name('A-Guide-to-Using-Church-Database-Software-for-More-Effective-Ministry');
Route::view('/resources/The-top-10-features-for-a-successful-church-in-ChurchCMS', 'blog-pages.The-top-10-features-for-a-successful-church-in-ChurchCMS')->name('The-top-10-features-for-a-successful-church-in-ChurchCMS');
Route::view('/resources/The-Ultimate-Guide-to-Online-Giving-Sermons-to-a-Large-Audience', 'blog-pages.The-Ultimate-Guide-to-Online-Giving-Sermons-to-a-Large-Audience')->name('The-Ultimate-Guide-to-Online-Giving-Sermons-to-a-Large-Audience');
Route::view('/resources/How-to-create-a-volunteer-registration-form', 'blog-pages.How-to-create-a-volunteer-registration-form')->name('How-to-create-a-volunteer-registration-form');
Route::view('/resources/The-Top-10-Advantages-of-Hosting-Church-Services-Live', 'blog-pages.The-Top-10-Advantages-of-Hosting-Church-Services-Live')->name('The-Top-10-Advantages-of-Hosting-Church-Services-Live');
Route::view('/resources/software-for-live-streaming-your-worship-and-events', 'blog-pages.software-for-live-streaming-your-worship-and-events')->name('software-for-live-streaming-your-worship-and-events');
Route::view('/resources/Is-it-necessary-to-use-online-church-charity-software', 'blog-pages.Is-it-necessary-to-use-online-church-charity-software')->name('Is-it-necessary-to-use-online-church-charity-software');
Route::view('/resources/The-Need-of-Best-Church-Management-Software', 'blog-pages.The-Need-of-Best-Church-Management-Software')->name('The-Need-of-Best-Church-Management-Software');
Route::view('/resources/why-a-parish-need-church-management-system', 'blog-pages.why-a-parish-need-church-management-system')->name('why-a-parish-need-church-management-system');
Route::view('/resources/organize-your-prayer-meeting-using-worship-planning-software', 'blog-pages.organize-your-prayer-meeting-using-worship-planning-software')->name('organize-your-prayer-meeting-using-worship-planning-software');
Route::view('/resources/How-to-Start-an-Online-Church-Service-the-Right-Way', 'blog-pages.How-to-Start-an-Online-Church-Service-the-Right-Way')->name('How-to-Start-an-Online-Church-Service-the-Right-Way');
Route::view('/resources/15-most-inspiring-bible-verses-to-inspire-you', 'blog-pages.15-most-inspiring-bible-verses-to-inspire-you')->name('15-most-inspiring-bible-verses-to-inspire-you');
Route::view('/resources/sermon-preparation-time-with-churchcms-management-software', 'blog-pages.sermon-preparation-time-with-churchcms-management-software')->name('sermon-preparation-time-with-churchcms-management-software');
Route::view('/resources/how-to-create-a-mobile-church-management-app-for-pastors-and-churches', 'blog-pages.how-to-create-a-mobile-church-management-app-for-pastors-and-churches')->name('how-to-create-a-mobile-church-management-app-for-pastors-and-churches');
Route::view('/resources/church-devotees-app-panel-features', 'blog-pages.church-devotees-app-panel-features')->name('church-devotees-app-panel-features');
Route::view('/resources/welcome-speech-to-delight-worshipers-in-the-online-church', 'blog-pages.welcome-speech-to-delight-worshipers-in-the-online-church')->name('welcome-speech-to-delight-worshipers-in-the-online-church');
Route::view('/resources/how-it-can-streamline-your-church-organization', 'blog-pages.how-it-can-streamline-your-church-organization')->name('how-it-can-streamline-your-church-organization');
Route::view('/resources/6-powerful-prayers-to-strengthen-the-church', 'blog-pages.6-powerful-prayers-to-strengthen-the-church')->name('6-powerful-prayers-to-strengthen-the-church');
Route::view('/resources/connect-with-your-church-community-anywhere-with-our-mobile-app', 'blog-pages.connect-with-your-church-community-anywhere-with-our-mobile-app')->name('connect-with-your-church-community-anywhere-with-our-mobile-app');

/*church template*/
Route::view('/church-website-builder', 'pages.church-template.church-websites')->name('church-website-templates');
Route::view('/church-websites/1', 'pages.church-template.template1.website1');
Route::view('/church-websites/2', 'pages.church-template.template2.website2');
Route::view('/church-websites/3', 'pages.church-template.template3.website3');
Route::view('/church-websites/4', 'pages.church-template.template4.website4');
Route::view('/church-websites/5', 'pages.church-template.template5.website5');
Route::view('/church-websites/6', 'pages.church-template.template6.website6');

Route::view('/church-websites/1/about', 'pages.church-template.template1.about');
Route::view('/church-websites/1/ministry', 'pages.church-template.template1.ministry');
Route::view('/church-websites/1/sermons', 'pages.church-template.template1.sermons');
Route::view('/church-websites/1/gallery', 'pages.church-template.template1.gallery');
Route::view('/church-websites/1/blog', 'pages.church-template.template1.blog');
Route::view('/church-websites/1/events', 'pages.church-template.template1.events');
Route::view('/church-websites/1/donation', 'pages.church-template.template1.donation');
Route::view('/church-websites/1/prayer', 'pages.church-template.template1.prayer');
Route::view('/church-websites/1/video-gallery', 'pages.church-template.template1.video-gallery');

Route::view('/church-websites/2/about', 'pages.church-template.template2.about');
Route::view('/church-websites/2/ministry', 'pages.church-template.template2.ministry');
Route::view('/church-websites/2/sermons', 'pages.church-template.template2.sermons');
Route::view('/church-websites/2/gallery', 'pages.church-template.template2.gallery');
Route::view('/church-websites/2/blog', 'pages.church-template.template2.blog');
Route::view('/church-websites/2/events', 'pages.church-template.template2.events');
Route::view('/church-websites/2/donation', 'pages.church-template.template2.donation');
Route::view('/church-websites/2/prayer', 'pages.church-template.template2.prayer');
Route::view('/church-websites/2/video-gallery', 'pages.church-template.template2.video-gallery');