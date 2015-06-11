# Craft Didread

A plugin to add some sort of inbox-functionality to Craft CMS.

## Usage

To check if a user has read the entry:
```twig
{{ craft.didread.user(currentUser).hasReadEntry(entry) }}
```

To mark the entry as read: 
```twig
{{ craft.didread.user(currentUser).markAsRead(entry) }}
```

To mark the entry as unread: 
```twig
{{ craft.didread.user(currentUser).markAsUnread(entry) }}
```
