# Craft Didread

[![Total Downloads](https://poser.pugx.org/creativeorange/craft-didread/d/total.svg)](https://packagist.org/packages/creativeorange/craft-didread)
[![Latest Stable Version](https://poser.pugx.org/creativeorange/craft-didread/v/stable.svg)](https://packagist.org/packages/creativeorange/craft-didread)
[![License](https://poser.pugx.org/creativeorange/craft-didread/license.svg)](https://packagist.org/packages/creativeorange/craft-didread)

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