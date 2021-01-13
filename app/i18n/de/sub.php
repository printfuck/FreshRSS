<?php

return array(
	'add' => 'Die Erstellung von Kategorien und Feeds wurde verschoben und findet sich ab sofort <a href=\'%s\'>hier</a>. Zusätzlich ist ein Zugriff über den linken Menüpunkt oder über das ✚ Symbol auf der Hauptseite möglich.',
	'api' => array(
		'documentation' => 'Kopieren Sie die folgende URL, um sie in einem externen Tool zu verwenden.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Ziehen Sie diese Schaltfläche auf Ihre Lesezeichen-Symbolleiste oder klicken Sie mit der rechten Maustaste darauf und wählen Sie "Als Lesezeichen hinzufügen". Klicken Sie dann auf einer beliebigen Seite, die Sie abonnieren möchten, auf die Schaltfläche "Abonnieren".',
		'label' => 'Abonnieren',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'_' => 'Kategorie',
		'add' => 'Eine Kategorie hinzufügen',
		'archiving' => 'Archivierung',
		'empty' => 'Leere Kategorie',
		'information' => 'Information',
		'position' => 'Reihenfolge',
		'position_help' => 'Steuert die Kategoriesortierung',
		'title' => 'Titel',
	),
	'feed' => array(
		'add' => 'Einen RSS-Feed hinzufügen',
		'advanced' => 'Erweitert',
		'archiving' => 'Archivierung',
		'auth' => array(
			'configuration' => 'Anmelden',
			'help' => 'Die Verbindung erlaubt Zugriff auf HTTP-geschützte RSS-Feeds',
			'http' => 'HTTP-Authentifizierung',
			'password' => 'HTTP-Passwort',
			'username' => 'HTTP-Nutzername',
		),
		'clear_cache' => 'Nicht cachen (für defekte Feeds)',
		'css_cookie' => 'Verwende Cookies beim Herunterladen des Feed-Inhalts mit CSS-Filtern',
		'css_cookie_help' => 'Beispiel: foo=bar; gdpr_consent=true; cookie=value',
		'css_help' => 'Ruft gekürzte RSS-Feeds ab (Achtung, benötigt mehr Zeit!)',
		'css_path' => 'Pfad zur CSS-Datei des Artikels auf der Original-Webseite',
		'description' => 'Beschreibung',
		'empty' => 'Dieser Feed ist leer. Bitte stellen Sie sicher, dass er noch gepflegt wird.',
		'error' => 'Dieser Feed ist auf ein Problem gestoßen. Bitte stellen Sie sicher, dass er immer lesbar ist und aktualisieren Sie ihn dann.',
		'filteractions' => array(
			'_' => 'Filteraktionen',
			'help' => 'Ein Suchfilter pro Zeile',
		),
		'information' => 'Information',
		'keep_min' => 'Minimale Anzahl an Artikeln, die behalten wird',
		'maintenance' => array(
			'clear_cache' => 'Zwischenspeicher leeren',
			'clear_cache_help' => 'Zwischenspeicher für diesen Feed leeren.',
			'reload_articles' => 'Artikel neuladen',
			'reload_articles_help' => 'Artikel neuladen und komplette Inhalte holen, wenn ein Selektor festgelegt wurde.',
			'title' => 'Wartung',
		),
		'moved_category_deleted' => 'Wenn Sie eine Kategorie entfernen, werden deren Feeds automatisch in die Kategorie <em>%s</em> eingefügt.',
		'mute' => 'Stumm schalten',
		'no_selected' => 'Kein Feed ausgewählt.',
		'number_entries' => '%d Artikel',
		'priority' => array(
			'_' => 'Sichtbarkeit',
			'archived' => 'Nicht anzeigen (archiviert)',
			'main_stream' => 'In Haupt-Feeds zeigen',
			'normal' => 'Zeige in eigener Kategorie',
		),
		'proxy' => 'Verwende einen Proxy, um den Feed abzuholen',
		'proxy_help' => 'Wähle ein Protokoll (z.B. SOCKS5) und einen Proxy mit Port (z.B. 127.0.0.1:1080)',
		'selector_preview' => array(
			'show_raw' => 'Quellcode anzeigen',
			'show_rendered' => 'Inhalt anzeigen',
		),
		'show' => array(
			'all' => 'Alle Feeds zeigen',
			'error' => 'Nur Feeds mit Fehlern zeigen',
		),
		'showing' => array(
			'error' => 'Nur Feeds mit Fehlern zeigen',
		),
		'ssl_verify' => 'Überprüfe SSL Sicherheit',
		'stats' => 'Statistiken',
		'think_to_add' => 'Sie können Feeds hinzufügen.',
		'timeout' => 'Zeitlimit in Sekunden',
		'title' => 'Titel',
		'title_add' => 'Einen RSS-Feed hinzufügen',
		'ttl' => 'Aktualisiere automatisch nicht öfter als',
		'url' => 'Feed-URL',
		'validator' => 'Überprüfen Sie die Gültigkeit des Feeds',
		'website' => 'Webseiten-URL',
		'websub' => 'Sofortbenachrichtigung mit WebSub',
	),
	'firefox' => array(
		'documentation' => 'Folge den <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">hier</a> beschriebenen Schritten um FreshRSS zu Deiner Firefox RSS-Reader Liste hinzuzufügen.',
		'obsolete_63' => 'Seit Version 63 hat Firefox die Möglichkeit entfernt, Dienste hinzuzufügen, die keine eigenständigen Anwendungen sind.',
		'title' => 'Firefox RSS-Reader',
	),
	'import_export' => array(
		'export' => 'Exportieren',
		'export_labelled' => 'Artikel mit Labeln exportieren',
		'export_opml' => 'Liste der Feeds exportieren (OPML)',
		'export_starred' => 'Ihre Favoriten exportieren',
		'feed_list' => 'Liste von %s Artikeln',
		'file_to_import' => 'Zu importierende Datei<br />(OPML, JSON oder ZIP)',
		'file_to_import_no_zip' => 'Zu importierende Datei<br />(OPML oder JSON)',
		'import' => 'Importieren',
		'starred_list' => 'Liste der Lieblingsartikel',
		'title' => 'Importieren / Exportieren',
	),
	'menu' => array(
		'add' => 'Feed oder Kategorie hinzufügen',
		'add_feed' => 'Feed hinzufügen',
		'bookmark' => 'Abonnieren (FreshRSS-Lesezeichen)',
		'import_export' => 'Importieren / Exportieren',
		'subscription_management' => 'Abonnementverwaltung',
		'subscription_tools' => 'Abonnement-Tools',
		'tag_management' => 'Tag-Verwaltung',
	),
	'tag' => array(
		'name' => 'Name',
		'new_name' => 'Alter Name',
		'old_name' => 'Neuer Name',
	),
	'title' => array(
		'_' => 'Abonnementverwaltung',
		'add' => 'Feed oder Kategorie hinzufügen',
		'add_category' => 'Kategorie hinzufügen',
		'add_feed' => 'Feed hinzufügen',
		'add_tag' => 'Tag hinzufügen',
		'delete_tag' => 'Tag löschen',
		'feed_management' => 'Verwaltung der RSS-Feeds',
		'rename_tag' => 'Tag umbenennen',
		'subscription_tools' => 'Abonnement-Tools',
	),
);
