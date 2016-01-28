/* update siteurl */
UPDATE tiny_options SET option_value = replace(option_value, 'http://tiny.com', 'http://tiny.junoteam.com') WHERE option_name = 'home' OR option_name = 'siteurl';
/* update guid */
UPDATE tiny_posts SET guid = REPLACE (guid, 'http://tiny.com', 'http://tiny.junoteam.com');
/* update wp_content */
UPDATE tiny_posts SET post_content = REPLACE (post_content, 'http://tiny.com', 'http://tiny.junoteam.com');
/* update wp attachment link */
UPDATE tiny_posts SET  guid = REPLACE (guid, 'http://tiny.com', 'http://tiny.junoteam.com') WHERE post_type = 'attachment';
/* update post meta */
UPDATE tiny_postmeta SET meta_value = REPLACE (meta_value, 'http://tiny.com','http://tiny.junoteam.com');