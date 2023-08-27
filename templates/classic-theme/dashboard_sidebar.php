<!-- Dashboard Sidebar
    ================================================== -->
<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                <span class="trigger-title"><?php _e("Dashboard Navigation") ?></span>
            </a>
            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul data-submenu-title="<?php _e("My Account") ?>">
                        <li class="<?php echo CURRENT_PAGE == 'app/dashboard' ? 'active' : ''; ?>"><a
                                    href="<?php url("DASHBOARD") ?>"><i
                                        class="icon-feather-grid"></i> <?php _e("Dashboard") ?></a></li>
                        <li class="<?php echo CURRENT_PAGE == 'app/all-images' || CURRENT_PAGE == 'app/all-documents'|| CURRENT_PAGE == 'app/all-speeches' ? 'active-submenu' : ''; ?>">
                            <a href="#"><i class="icon-feather-file-text"></i> <?php _e("My Creations") ?></a>
                            <ul>
                                <li class="<?php echo CURRENT_PAGE == 'app/all-documents' ? 'active' : ''; ?>"><a
                                            href="<?php url("ALL_DOCUMENTS") ?>"><?php _e("All Documents") ?></a></li>
                                <?php if ($config['enable_ai_images']) { ?>
                                <li class="<?php echo CURRENT_PAGE == 'app/all-images' ? 'active' : ''; ?>"><a
                                            href="<?php url("ALL_IMAGES") ?>"><?php _e("All AI Images") ?></a></li>
                                <?php }

                                if (get_option('enable_text_to_speech', 0)) { ?>
                                    <li class="<?php echo CURRENT_PAGE == 'app/all-speeches' ? 'active' : ''; ?>"><a
                                                href="<?php url("ALL_SPEECHES") ?>"><?php _e("All Speeches") ?></a></li>
                                <?php } ?>

                            </ul>
                        </li>
                        <li class="<?php echo CURRENT_PAGE == 'app/ai-templates' ? 'active' : ''; ?>">
                            <a href="<?php url("AI_TEMPLATES") ?>"><i class="icon-feather-layers"></i> <?php _e("All Tools") ?></a>
                        </li>
                    </ul>

                    <ul data-submenu-title="<?php _e("Tools") ?>">
                    
                        <li><a href="#" data-category="1"><i class="icon-feather-edit-3"></i>Article And Blogs</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/blog-ideas"><?php _e("Blog Ideas") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/blog-intros"><?php _e("Blog Intros") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/blog-titles"><?php _e("Blog Titles") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/blog-section"><?php _e("Blog Section") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/blog-conclusion"><?php _e("Blog Conclusion") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/article-writer"><?php _e("Article Writer") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/article-rewriter"><?php _e("Article Rewriter") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/talking-points"><?php _e("Talking Points") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/paragraph-writer"><?php _e("Paragraph Writer") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/content-rephrase"><?php _e("Content Rephrase") ?></a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-category="2"><i class="icon-feather-tv"></i>Ads & Marketing Tool</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/facebook-ads"><?php _e("Facebook Ads") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/facebook-ads-headlines"><?php _e("Facebook Ads Headlines") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/google-ad-titles"><?php _e("Google Ad Titles") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/google-ad-descriptions"><?php _e("Google Ad Descriptions") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/linkedin-ad-headlines"><?php _e("Linkedin Ad Headlines") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/linkedin-ad-descriptions"><?php _e("Linkedin Ad Descriptions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/app-and-sms-notifications"><?php _e("App and SMS Notifications") ?></a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-category="3"><i class="icon-feather-edit-2"></i>General Writing</a>
                        <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/text-extender"><?php _e("Text Extender") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/content-shorten"><?php _e("Content Shorten") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/quora-answers"><?php _e("Quora Answers") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/summarize-for-2nd-grader"><?php _e("Summarize For Second Grader") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/stories"><?php _e("Stories") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/bullet-point-answers"><?php _e("Bullet Point Answers") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/definition"><?php _e("Definition") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/answers"><?php _e("Answers") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/questions"><?php _e("Questions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/passive-active-voice"><?php _e("Passive To Active Voice") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/pros-cons"><?php _e("Pros and Cons") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/rewrite-with-keywords"><?php _e("Rewrite With Keywords") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/emails"><?php _e("Emails") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/emails-v2"><?php _e("Emails V2") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/email-subject-lines "><?php _e("Email Subject Lines") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/startup-name-generator "><?php _e("Startup Name Generator") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/company-bios "><?php _e("Company Bios") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/company-mission "><?php _e("Company Msssion") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/company-vision "><?php _e("Company Vision") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#" data-category="4"><i class="icon-feather-shopping-cart"></i>Ecommerce</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/product-name-generator"><?php _e("Product Name Generator") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/product-descriptions"><?php _e("Product Descriptions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-titles"><?php _e("Amazon Product Titles") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-descriptions"><?php _e("Amazon Product Descriptions") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-features"><?php _e("Amazon Product Features") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-category="5"><i class="icon-feather-facebook"></i>Social Media</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/social-post-personal"><?php _e("Social Media Post(Personal)") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/social-post-business"><?php _e("Social Media Post(Business)") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/instagram-captions"><?php _e("Instagram Captions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/instagram-hashtags"><?php _e("Instagram Hashtags") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/twitter-tweets"><?php _e("Twitter Tweets") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/youtube-titles"><?php _e("Youtube Titles") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/youtube-descriptions"><?php _e("YouTube Descriptions") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/youtube-outlines"><?php _e("YouTube Outlines") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/linkedin-posts"><?php _e("Linkedin Posts") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/tiktok-video-scripts"><?php _e("TikTok Video Scripts") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-category="6"><i class="icon-feather-layout"></i>Website</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/meta-tags-blog"><?php _e("SEO (Blog Post)") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/meta-tags-homepage"><?php _e("SEO (Homepage)") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/meta-tags-product"><?php _e("SEO (Product Page)") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                              
                            </ul>
                        </li>

                        <li><a href="#" data-category="7"><i class="icon-feather-menu"></i>Other</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/tone-changer"><?php _e("Tone Changer") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/song-lyrics"><?php _e("Song Lyrics") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/translate"><?php _e("Translate") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/faqs"><?php _e("FAQs") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/faq-answers"><?php _e("FAQ Answers") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/testimonials-reviews"><?php _e("Testimonials/Reviews") ?><span class="dashboard-status-button yellow">Pro</span></a></li>
                            </ul>
                        </li>

                        <!-- Removed href and classname in above lists. Below li is the previuos li. -->
                        <!-- <li><a href="javascript:void();" class="ai-templates-category" data-category="4">Ecommerce</a>
                            <ul>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/product-name-generator"><?php _e("Product Name Generator") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/product-desciptions"><?php _e("Product Descriptions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-titles"><?php _e("Amazon Product Titles") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-descriptions"><?php _e("Amazon Product Descriptions") ?></a></li>
                                <li><a href="<?php echo url('AI_TEMPLATES') ?>/amazon-product-features"><?php _e("Amazon Product Features") ?></a></li>
                              
                            </ul>
                        </li> -->
                                           
                
                    </ul>


                    <!-- <ul data-submenu-title="<?php _e("Organize and Manage") ?>">
                        <?php if (get_option('enable_ai_templates', 1)) { ?>
                        <li class="<?php echo CURRENT_PAGE == 'app/ai-templates' ? 'active' : ''; ?>">
                            <a href="<?php url("AI_TEMPLATES") ?>"><i
                                        class="icon-feather-layers"></i> <?php _e("Templates") ?></a></li>

                        <?php
                        }
                        if ($config['enable_ai_images']) { ?>
                        <li class="<?php echo CURRENT_PAGE == 'app/ai-images' ? 'active' : ''; ?>"><a
                                    href="<?php url("AI_IMAGES") ?>"><i
                                        class="icon-feather-image"></i> <?php _e("AI Images") ?></a></li>
                        <?php }

                        if ($config['enable_ai_chat']) { ?>
                            <li class="<?php echo CURRENT_PAGE == 'app/ai-chat' || CURRENT_PAGE == 'app/ai-chat-bots' ? 'active' : ''; ?>"><a href="<?php url("AI_CHAT_BOTS") ?>">
                                    <i class="icon-feather-message-circle"></i> <?php _e("AI Chat") ?>
                                </a></li>
                        <?php }

                        if ($config['enable_speech_to_text']) { ?>
                            <li class="<?php echo CURRENT_PAGE == 'app/ai-speech-text' ? 'active' : ''; ?>"><a
                                        href="<?php url("AI_SPEECH_TEXT") ?>"><i
                                            class="icon-feather-headphones"></i> <?php _e("Speech to Text") ?></a></li>
                        <?php }

                        if (get_option('enable_text_to_speech', 0)) { ?>
                            <li class="<?php echo CURRENT_PAGE == 'app/ai-text-speech' ? 'active' : ''; ?>"><a
                                        href="<?php url("AI_TEXT_SPEECH") ?>"><i
                                            class="icon-feather-volume-2"></i> <?php _e("Text to Speech") ?></a></li>
                        <?php }

                        if ($config['enable_ai_code']) { ?>
                            <li class="<?php echo CURRENT_PAGE == 'app/ai-code' ? 'active' : ''; ?>"><a
                                        href="<?php url("AI_CODE") ?>"><i
                                            class="icon-feather-code"></i> <?php _e("AI Code") ?></a></li>
                        <?php } ?>
                    </ul> -->

                    <ul data-submenu-title="<?php _e("Account") ?>">

                        <!-- <?php if ($config['enable_affiliate_program']) {
                        if (get_option('allow_affiliate_payouts', 1)) { ?>
                        <li class="<?= CURRENT_PAGE == 'global/affiliate-program' || CURRENT_PAGE == 'global/withdrawals' ? 'active-submenu' : ''; ?>">
                            <a href="<?php url("AFFILIATE-PROGRAM") ?>"><i
                                        class="icon-feather-share-2"></i> <?php _e("Affiliate Program") ?></a>
                            <ul>
                                <li class="<?= CURRENT_PAGE == 'global/affiliate-program' ? 'active' : ''; ?>"><a
                                            href="<?php url("AFFILIATE-PROGRAM") ?>"><?php _e("Affiliate Program") ?></a></li>
                                <li class="<?= CURRENT_PAGE == 'global/withdrawals' ? 'active' : ''; ?>"><a
                                            href="<?php url("WITHDRAWALS") ?>"><?php _e("Withdrawals") ?></a></li>
                            </ul>
                        </li>
                        <?php } else { ?>
                            <li class="<?= CURRENT_PAGE == 'global/affiliate-program' ? 'active' : ''; ?>"><a
                                        href="<?php url("AFFILIATE-PROGRAM") ?>"><i
                                            class="icon-feather-share-2"></i> <?php _e("Affiliate Program") ?></a></li>
                            <?php }
                        } ?> -->
                        <li class="<?php echo CURRENT_PAGE == 'global/membership' ? 'active' : ''; ?>"><a
                                    href="<?php url("MEMBERSHIP") ?>"><i
                                        class="icon-feather-gift"></i> <?php _e("Your Plan") ?></a></li>
                        <li class="<?php echo CURRENT_PAGE == 'global/transaction' ? 'active' : ''; ?>"><a
                                    href="<?php url("TRANSACTION") ?>"><i
                                        class="icon-feather-file-text"></i> <?php _e("Invoices") ?></a></li>
                        <li class="<?php echo CURRENT_PAGE == 'global/account-setting' ? 'active' : ''; ?>"><a
                                    href="<?php url("ACCOUNT_SETTING") ?>"><i
                                        class="icon-feather-log-out"></i> <?php _e("Account Setting") ?></a></li>
                        <li><a href="<?php url("LOGOUT") ?>"><i
                                        class="icon-material-outline-power-settings-new"></i> <?php _e("Logout") ?></a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Navigation / End -->
        </div>
    </div>
</div>
<!-- Dashboard Sidebar / End -->