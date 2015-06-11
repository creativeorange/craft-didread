# Craft Didread
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/creativeorange/craft-didread/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

A plugin to add some sort of inbox-functionality to Craft CMS.

## Usage

To check if a user has read the entry:
```twig
{% set isRead = craft.didread.user(currentUser).hasReadEntry(entry) %}
```

To mark the entry as read: 
```twig
{% set asRead = craft.didread.user(currentUser).markAsRead(entry) %}
```

To mark the entry as unread: 
```twig
{% set asUnread = craft.didread.user(currentUser).markAsUnread(entry) %}
```
