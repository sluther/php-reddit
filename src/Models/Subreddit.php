<?php

namespace PhpReddit\PhpReddit\Models;

use Exception;

class Subreddit extends Base
{
    const KIND_PREFIX = 't5_';


    /**
     * @var string|null user_flair_background_color null
     */
    
    public string|null $user_flair_background_color;

    /**
     * @var string|null submit_text_html "&lt;!-- SC_OFF --&gt;&lt;div class=\"md\"&gt;&lt;h3&gt;Read the rules before submitting.&lt;/h3&gt;\n\n&lt;ul&gt;\n&lt;li&gt;&lt;strong&gt;&lt;em&gt;Submitting screenshots will result in a 7-day ban&lt;/em&gt;&lt;/strong&gt;&lt;/li&gt;\n&lt;/ul&gt;\n\n&lt;p&gt;&lt;a href=\"/#\" title=\"The CSS only allows this to be 2 lines long: One header (###) and one bullet-point. Message /u/Antabaka if you would like it to be extended. (This won&amp;#39;t show up on the submission page with or without CSS enabled.)\"&gt;&lt;/a&gt;&lt;/p&gt;\n&lt;/div&gt;&lt;!-- SC_ON --&gt;"
     */
    public string|null $submit_text_html;

    /**
     * @var bool|null restrict_posting true
     */
    public bool|null $restrict_posting;

    /**
     * @var bool|null user_is_banned false
     */
    public bool|null $user_is_banned;

    /**
     * @var bool|null free_form_reports true
     */
    public bool|null $free_form_reports;

    /**
     * @var bool|null wiki_enabled true
     */
    public bool|null $wiki_enabled;

    /**
     * @var bool|null user_is_muted false
     */
    public bool|null $user_is_muted;

    /**
     * @var bool|null user_can_flair_in_sr null
     */
    public bool|null $user_can_flair_in_sr;

    /**
     * @var string|null display_name "WTF"
     */
    public string|null $display_name;

    /**
     * @var string|null header_img "https://b.thumbs.redditmedia.com/iOKNn7PIc_KHK-cIOWJhnx9zvlI8-y8H7QaiAU5cgVo.png"
     */
    public string|null $header_img;

    /**
     * @var string|null title "WTF?!"
     */
    public string|null $title;

    /**
     * @var bool|null allow_galleries true
     */
    public bool|null $allow_galleries;

    /**
     * @var string|null icon_size null
     */
    public string|null $icon_size;

    /**
     * @var string|null primary_color "#2a2a2a"
     */
    public string|null $primary_color;

    /**
     * @var int|null active_user_count null
     */
    public int|null $active_user_count;

    /**
     * @var string|null icon_img ""
     */
    public string|null $icon_img;

    /**
     * @var string|null display_name_prefixed "r/WTF"
     */
    public string|null $display_name_prefixed;

    /**
     * @var string|null accounts_active null
     */
    public string|null $accounts_active;

    /**
     * @var bool|null public_traffic false
     */
    public bool|null $public_traffic;

    /**
     * @var int|null subscribers 6842167
     */
    public int|null $subscribers;

    /**
     * @var array|null user_flair_richtext []
     */
    public array|null $user_flair_richtext;

    /**
     * @var int|null videostream_links_count 3
     */
    public int|null $videostream_links_count;

    /**
     * @var string|null quarantine false
     */
    public string|null $quarantine;

    /**
     * @var bool|null hide_ads false
     */
    public bool|null $hide_ads;

    /**
     * @var string|null prediction_leaderboard_entry_type "SUBREDDIT_HEADER"
     */
    public string|null $prediction_leaderboard_entry_type;

    /**
     * @var bool|null emojis_enabled false
     */
    public bool|null $emojis_enabled;

    /**
     * @var string|null advertiser_category ""
     */
    public string|null $advertiser_category;

    /**
     * @var string|null public_description "Things that make you say \"What the F*ck\"."
     */
    public string|null $public_description;

    /**
     * @var int|null comment_score_hide_mins 0
     */
    public int|null $comment_score_hide_mins;

    /**
     * @var bool|null allow_predictions true
     */
    public bool|null $allow_predictions;

    /**
     * @var bool|null user_has_favorited false
     */
    public bool|null $user_has_favorited;

    /**
     * @var string|null user_flair_template_id null
     */
    public string|null $user_flair_template_id;

    /**
     * @var string|null community_icon "https://styles.redditmedia.com/t5_2qh61/styles/communityIcon_mdifybb3r2z01.png?width=256&amp;s=c079f0158f919132e69f951e1317224339fe3498"
     */
    public string|null $community_icon;

    /**
     * @var string|null banner_background_image ""
     */
    public string|null $banner_background_image;

    /**
     * @var bool|null original_content_tag_enabled false
     */
    public bool|null $original_content_tag_enabled;

    /**
     * @var bool|null community_reviewed true
     */
    public bool|null $community_reviewed;

    /**
     * @var string|null submit_text "###Read the rules before submitting.\n\n* ***Submitting screenshots will result in a 7-day ban***\n\n[](/# \"The CSS only allows this to be 2 lines long: One header (###) and one bullet-point. Message /u/Antabaka if you would like it to be extended. (This won't show up on the submission page with or without CSS enabled.)\")"
     */
    public string|null $submit_text;

    /**
     * @var string|null description_html "&lt;!-- SC_OFF --&gt;&lt;div class=\"md\"&gt;&lt;hr/&gt;\n\n&lt;blockquote&gt;\n&lt;h6&gt;&lt;a href=\"http://www.reddit.com/r/wtf/about/sidebar\"&gt;READ THE RULES. No Screenshots! Warning: 7 day ban for violation!&lt;/a&gt;;  No gore allowed - &lt;a href=\"http://www.reddit.com/r/wtf/about/sidebar\"&gt;Please read rule 10.&lt;/a&gt;&lt;/h6&gt;\n&lt;/blockquote&gt;\n\n&lt;h1&gt;&lt;strong&gt;All (&amp;amp; only) things that make you say WTF&lt;/strong&gt;*&lt;/h1&gt;\n\n&lt;hr/&gt;\n\n&lt;p&gt;&lt;strong&gt;RULES&lt;/strong&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;em&gt;(Hover or &lt;a href=\"/r/wtf/about/rules/\"&gt;tap here&lt;/a&gt; for details)&lt;/em&gt;&lt;/p&gt;\n\n&lt;h3&gt;1. No screenshots of anything! 7 day ban for violation. -&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;Of anything! E.g. (but not limited to) Facebook, Youtube, 4chan. &lt;a href=\"http://en.wikipedia.org/wiki/Screenshot\"&gt;Definition of &amp;quot;screenshot&amp;quot;&lt;/a&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;2. No Personal Information.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;&lt;a href=\"https://reddit.zendesk.com/hc/en-us/articles/205183175-Is-posting-someone-s-private-or-personal-information-okay-\"&gt;All personal information will be removed&lt;/a&gt;, offenders banned. This includes, but is not limited to, full names, phone/address &amp;amp; online profiles.&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;3. No &amp;quot;rage-worthy&amp;quot; posts.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;This includes posts which may incite activism, outcry, outrage or involve &amp;quot;injustice&amp;quot;. Also, &lt;a href=\"http://www.reddit.com/wiki/reddiquette#wiki_please__don.27t\"&gt;Reddit is not your personal army.&lt;/a&gt; &lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;4. No Political posts.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;Neither posts with political implications, nor politics of any kind are allowed, especially US politics. To see the original post outlining this rule, click &lt;a href=\"http://www.reddit.com/r/WTF/comments/eysc5/do_not_post_any_politics_to_rwtf_period_no/\"&gt;here&lt;/a&gt;.&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;5. NSFW posts must be tagged.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;If they haven&amp;#39;t been marked, they will be removed (and not reinstated).&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;6. No Superimposed Text.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;This includes Captioned Images, Memes, &amp;amp; Demotivational Posters.&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;7. No comics or anime.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;This includes rage comics, Print comics, web comics, anime videos/gifs &amp;amp; Manga&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;8. No Begging for Upvotes.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;No post titles soliciting karma (e.g. &amp;quot;upvote this&amp;quot;, or &amp;quot;cakeday&amp;quot;.)&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;9. No Links to Reddit.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;This also includes screenshots of Reddit.&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;10. No gore. No Porn.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;Gore is not allowed: All forms of gore, which includes depiction of serious physical injury involving blood, flesh, bone and internal organs. &lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;11. Your post/comment will be removed if it is racist, sexist, vitriolic, or overly crude. Ban applied.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;And will result in bans. (Please report them)&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;h3&gt;12. Novelty accounts and bots are not allowed.&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;They will be banned. (Please report them)&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;hr/&gt;\n\n&lt;p&gt;&lt;a href=\"/wiki/reddit_101\"&gt;New to reddit? Click here!&lt;/a&gt;&lt;/p&gt;\n\n&lt;hr/&gt;\n\n&lt;p&gt;&lt;em&gt;(Hover to view - &lt;a href=\"/r/wtf/about/rules/\"&gt;mobile users tap here&lt;/a&gt;)&lt;/em&gt;&lt;/p&gt;\n\n&lt;h3&gt;Shout Outs:&lt;/h3&gt;\n\n&lt;ol&gt;\n&lt;li&gt;&lt;a href=\"/r/awwwtf\"&gt;/r/awwwtf&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/rage\"&gt;/r/rage&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/hoarding\"&gt;/r/hoarding&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/MorbidReality\"&gt;/r/MorbidReality&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/NSFW_WTF\"&gt;/r/NSFW_WTF&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/Weird\"&gt;/r/Weird&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/WTFart\"&gt;/r/WTFart&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/WTFdidIjustread\"&gt;/r/WTFdidIjustread&lt;/a&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/Eyebleach\"&gt;/r/Eyebleach&lt;/a&gt; &lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/WhatIsThisThing\"&gt;/r/WhatIsThisThing&lt;/a&gt;&lt;br/&gt;&lt;/li&gt;\n&lt;li&gt;&lt;a href=\"/r/InterestingAsFuck\"&gt;/r/InterestingAsFuck&lt;/a&gt; &lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;hr/&gt;\n\n&lt;p&gt;&lt;strong&gt;*The moderators of &lt;a href=\"/r/WTF\"&gt;/r/WTF&lt;/a&gt; reserve the right to moderate posts and comments at their discretion, with regard to their perception of the suitability of said posts and comments for this subreddit. This includes banning users for spamming, shitposting, or causing trouble.&lt;/strong&gt; &lt;/p&gt;\n\n&lt;p&gt;Thank you for your understanding.&lt;/p&gt;\n\n&lt;hr/&gt;\n\n&lt;p&gt;If you have any questions, comments, or concerns about &lt;a href=\"/r/WTF\"&gt;/r/WTF&lt;/a&gt; you can contact us by clicking the &amp;#39;&lt;a href=\"http://www.reddit.com/message/compose?to=%2Fr%2FWTF\"&gt;message the moderators&lt;/a&gt;&amp;#39; link, located on the lower right hand side of the page. However, before you do that please check and make sure that your questions or concerns haven&amp;#39;t already been &lt;a href=\"http://www.reddit.com/r/InternetAMA/comments/1950b4/we_are_the_moderators_of_rwtf_ask_us_anything/\"&gt;answered here&lt;/a&gt;.&lt;/p&gt;\n\n&lt;p&gt;&lt;a href=\"#/RES_SR_Config/NightModeCompatible\"&gt;&lt;/a&gt;&lt;/p&gt;\n&lt;/div&gt;&lt;!-- SC_ON --&gt;"
     */
    public string|null $description_html;

    /**
     * @var bool|null spoilers_enabled true
     */
    public bool|null $spoilers_enabled;

    /**
     * @var string|null comment_contribution_settings {}
     */
    public string|null $comment_contribution_settings;

    /**
     * @var bool|null allow_talks true
     */
    public bool|null $allow_talks;

    /**
     * @var array|null header_size [44,50]
     */
    public array|null $header_size;

    /**
     * @var string|null user_flair_position "right"
     */
    public string|null $user_flair_position;

    /**
     * @var string|null all_original_content false
     */
    public string|null $all_original_content;

    /**
     * @var string|null has_menu_widget false
     */
    public string|null $has_menu_widget;

    /**
     * @var string|null is_enrolled_in_new_modmail null
     */
    public string|null $is_enrolled_in_new_modmail;

    /**
     * @var string|null key_color "#545452"
     */
    public string|null $key_color;

    /**
     * @var string|null can_assign_user_flair false
     */
    public string|null $can_assign_user_flair;

    /**
     * @var string|null created 1201268659
     */
    public string|null $created;

    /**
     * @var string|null wls 7
     */
    public string|null $wls;

    /**
     * @var string|null show_media_preview false
     */
    public string|null $show_media_preview;

    /**
     * @var string|null submission_type "link"
     */
    public string|null $submission_type;

    /**
     * @var string|null user_is_subscriber true
     */
    public string|null $user_is_subscriber;

    /**
     * @var string|null allowed_media_in_comments []
     */
    public string|null $allowed_media_in_comments;

    /**
     * @var bool|null allow_videogifs true
     */
    public bool|null $allow_videogifs;

    /**
     * @var bool|null should_archive_posts true
     */
    public bool|null $should_archive_posts;

    /**
     * @var string|null user_flair_type "text"
     */
    public string|null $user_flair_type;

    /**
     * @var bool|null allow_polls false
     */
    public bool|null $allow_polls;

    /**
     * @var bool|null collapse_deleted_comments true
     */
    public bool|null $collapse_deleted_comments;

    /**
     * @var string|null emojis_custom_size null
     */
    public string|null $emojis_custom_size;

    /**
     * @var string|null public_description_html "&lt;!-- SC_OFF --&gt;&lt;div class=\"md\"&gt;&lt;p&gt;Things that make you say &amp;quot;What the F*ck&amp;quot;.&lt;/p&gt;\n&lt;/div&gt;&lt;!-- SC_ON --&gt;"
     */
    public string|null $public_description_html;

    /**
     * @var bool|null allow_videos true
     */
    public bool|null $allow_videos;

    /**
     * @var bool|null is_crosspostable_subreddit null
     */
    public bool|null $is_crosspostable_subreddit;

    /**
     * @var string|null suggested_comment_sort null
     */
    public string|null $suggested_comment_sort;

    /**
     * @var bool|null should_show_media_in_comments_setting true
     */
    public bool|null $should_show_media_in_comments_setting;

    /**
     * @var bool|null can_assign_link_flair false
     */
    public bool|null $can_assign_link_flair;

    /**
     * @var bool|null accounts_active_is_fuzzed false
     */
    public bool|null $accounts_active_is_fuzzed;

    /**
     * @var bool|null allow_prediction_contributors false
     */
    public bool|null $allow_prediction_contributors;

    /**
     * @var string|null submit_text_label ""
     */
    public string|null $submit_text_label;

    /**
     * @var string|null link_flair_position "left"
     */
    public string|null $link_flair_position;

    /**
     * @var string|null user_sr_flair_enabled null
     */
    public string|null $user_sr_flair_enabled;

    /**
     * @var bool|null user_flair_enabled_in_sr false
     */
    public bool|null $user_flair_enabled_in_sr;

    /**
     * @var bool|null allow_discovery true
     */
    public bool|null $allow_discovery;

    /**
     * @var bool|null accept_followers true
     */
    public bool|null $accept_followers;

    /**
     * @var bool|null user_sr_theme_enabled true
     */
    public bool|null $user_sr_theme_enabled;

    /**
     * @var bool|null link_flair_enabled true
     */
    public bool|null $link_flair_enabled;

    /**
     * @var bool|null disable_contributor_requests false
     */
    public bool|null $disable_contributor_requests;

    /**
     * @var string|null subreddit_type "public"
     */
    public string|null $subreddit_type;

    /**
     * @var string|null notification_level "low"
     */
    public string|null $notification_level;

    /**
     * @var string|null banner_img ""
     */
    public string|null $banner_img;

    /**
     * @var string|null user_flair_text null
     */
    public string|null $user_flair_text;

    /**
     * @var string|null banner_background_color "#2a2a2a"
     */
    public string|null $banner_background_color;

    /**
     * @var bool|null show_media true
     */
    public bool|null $show_media;

    /**
     * @var bool|null user_is_contributor false
     */
    public bool|null $user_is_contributor;

    /**
     * @var bool|null over18 false
     */
    public bool|null $over18;

    /**
     * @var string|null header_title "What. The. Fuck."
     */
    public string|null $header_title;

    /**
     * @var string|null description "---\n&gt;###### [READ THE RULES. No Screenshots! Warning: 7 day ban for violation!](http://www.reddit.com/r/wtf/about/sidebar);  No gore allowed - [Please read rule 10.](http://www.reddit.com/r/wtf/about/sidebar)\n\n# **All (&amp; only) things that make you say WTF***\n\n----\n\n**RULES**\n\n*(Hover or [tap here](/r/wtf/about/rules/) for details)*\n\n###1. No screenshots of anything! 7 day ban for violation. -  \n\n1. Of anything! E.g. (but not limited to) Facebook, Youtube, 4chan. [Definition of \"screenshot\"](http://en.wikipedia.org/wiki/Screenshot)\n\n###2. No Personal Information.\n1. [All personal information will be removed](https://reddit.zendesk.com/hc/en-us/articles/205183175-Is-posting-someone-s-private-or-personal-information-okay-), offenders banned. This includes, but is not limited to, full names, phone/address &amp; online profiles.\n\n###3. No \"rage-worthy\" posts.\n1. This includes posts which may incite activism, outcry, outrage or involve \"injustice\". Also, [Reddit is not your personal army.](http://www.reddit.com/wiki/reddiquette#wiki_please__don.27t) \n\n###4. No Political posts.\n1. Neither posts with political implications, nor politics of any kind are allowed, especially US politics. To see the original post outlining this rule, click [here](http://www.reddit.com/r/WTF/comments/eysc5/do_not_post_any_politics_to_rwtf_period_no/).\n\n###5. NSFW posts must be tagged.\n1. If they haven't been marked, they will be removed (and not reinstated).\n\n###6. No Superimposed Text.\n1. This includes Captioned Images, Memes, &amp; Demotivational Posters.\n\n###7. No comics or anime.\n1. This includes rage comics, Print comics, web comics, anime videos/gifs &amp; Manga\n\n###8. No Begging for Upvotes.\n1. No post titles soliciting karma (e.g. \"upvote this\", or \"cakeday\".)\n\n###9. No Links to Reddit.\n1. This also includes screenshots of Reddit.\n\n###10. No gore. No Porn.\n1. Gore is not allowed: All forms of gore, which includes depiction of serious physical injury involving blood, flesh, bone and internal organs. \n\n###11. Your post/comment will be removed if it is racist, sexist, vitriolic, or overly crude. Ban applied.\n1. And will result in bans. (Please report them)\n\n###12. Novelty accounts and bots are not allowed.\n1. They will be banned. (Please report them)\n\n\n---\n\n[New to reddit? Click here!](/wiki/reddit_101)\n\n----\n*(Hover to view - [mobile users tap here](/r/wtf/about/rules/))*\n\n###Shout Outs:\n\n1. /r/awwwtf\n2. /r/rage\n3. /r/hoarding\n4. /r/MorbidReality\n5. /r/NSFW_WTF\n6. /r/Weird\n7. /r/WTFart\n8. /r/WTFdidIjustread\n9. /r/Eyebleach \n10. /r/WhatIsThisThing  \n11. /r/InterestingAsFuck \n\n-------------\n\n**\\*The moderators of /r/WTF reserve the right to moderate posts and comments at their discretion, with regard to their perception of the suitability of said posts and comments for this subreddit. This includes banning users for spamming, shitposting, or causing trouble.** \n\nThank you for your understanding.\n\n-------------\n\nIf you have any questions, comments, or concerns about /r/WTF you can contact us by clicking the '[message the moderators](http://www.reddit.com/message/compose?to=%2Fr%2FWTF)' link, located on the lower right hand side of the page. However, before you do that please check and make sure that your questions or concerns haven't already been [answered here](http://www.reddit.com/r/InternetAMA/comments/1950b4/we_are_the_moderators_of_rwtf_ask_us_anything/).\n\n[](#/RES_SR_Config/NightModeCompatible)"
     */
    public string|null $description;

    /**
     * @var string|null submit_link_label ""
     */
    public string|null $submit_link_label;

    /**
     * @var string|null user_flair_text_color null
     */
    public string|null $user_flair_text_color;

    /**
     * @var bool|null restrict_commenting false
     */
    public bool|null $restrict_commenting;

    /**
     * @var string|null user_flair_css_class null
     */
    public string|null $user_flair_css_class;

    /**
     * @var bool|null allow_images true
     */
    public bool|null $allow_images;

    /**
     * @var string|null lang "en"
     */
    public string|null $lang;

    /**
     * @var string|null whitelist_status "some_ads"
     */
    public string|null $whitelist_status;

    /**
     * @var string|null url "/r/WTF/"
     */
    public string|null $url;

    /**
     * @var string|null created_utc 1201268659
     */
    public string|null $created_utc;

    /**
     * @var string|null banner_size null
     */
    public string|null $banner_size;

    /**
     * @var string|null mobile_banner_image ""
     */
    public string|null $mobile_banner_image;

    /**
     * @var bool|null user_is_moderator false
     */
    public bool|null $user_is_moderator;

    /**
     * @var bool|null allow_predictions_tournament true
     */
    public bool|null $allow_predictions_tournament;


    public function __construct(?string $id = null, ?string $name = null, ?array $object = null)
    {
        if (!isset($id) && !isset($name)) {
            // throw exception if neither is set
            throw new Exception('Invalid Subreddit provided; id or name must be provided');
        }

        if (!isset($object)) {
            $object = [];
        }

        if (isset($name)) {
            $object['display_name'] = $name;
        }

        parent::__construct(id: $id, object: $object);
    }

}
