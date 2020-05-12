CREATE TABLE tx_kocksmachine_domain_model_machine (

	uid int(11) NOT NULL auto_increment,
	pid int(11) NULL,

	images int(11) unsigned NULL,
	title varchar(255) NULL,
	description text NULL,

	tstamp int(11) unsigned NULL,
	crdate int(11) unsigned NULL,
	cruser_id int(11) unsigned NULL,
	deleted tinyint(4) unsigned NULL,
	hidden tinyint(4) unsigned NULL,
	starttime int(11) unsigned NULL,
	endtime int(11) unsigned NULL,

	t3ver_oid int(11) NULL,
	t3ver_id int(11) NULL,
	t3ver_wsid int(11) NULL,
	t3ver_label varchar(255) NULL,
	t3ver_state tinyint(4) NULL,
	t3ver_stage int(11) NULL,
	t3ver_count int(11) NULL,
	t3ver_tstamp int(11) NULL,
	t3ver_move_id int(11) NULL,

	sys_language_uid int(11) NULL,
	l10n_parent int(11) NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);
