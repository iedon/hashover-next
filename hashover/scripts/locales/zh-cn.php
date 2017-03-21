<?php

// Copyright (C) 2015-2017 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Display source code
if (basename ($_SERVER['PHP_SELF']) === basename (__FILE__)) {
	if (isset ($_GET['source'])) {
		header ('Content-type: text/plain; charset=UTF-8');
		exit (file_get_contents (basename (__FILE__)));
	}
}

// Simplified Chinese text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> '在这里写点什么吧...',
	'reply-form'		=> '请在这里输入你要回复的内容...',
	'form-tip'		=> '接受HTML: &lt;b&gt;，&lt;u&gt;，&lt;i&gt;，&lt;s&gt;，&lt;big&gt;，&lt;em&gt;，&lt;small&gt;，&lt;strong&gt;，&lt;sub&gt;，&lt;sup&gt;，&lt;pre&gt;，&lt;ul&gt;，&lt;ol&gt;，&lt;li&gt;，&lt;blockquote&gt;，&lt;code&gt;转义HTML，网址自动成为链接，[img]URL在这里[/img] 将显示外部图像。',
	'post-button'		=> '发表评论',
	'login'			=> '登陆',
	'login-tip'		=> '登陆 (可选)',
	'logout'		=> '退出',
	'be-first-name'		=> '沙发空缺中，还不快抢？',
	'pending-name'		=> '请稍后...',
	'deleted-name'		=> '已删除...',
	'error-name'		=> '出错了...',
	'be-first-note'		=> '写下第一个评论！',
	'pending-note'		=> '此评论正在等待批准。',
	'deleted-note'		=> '此评论已经被删除了。',
	'error-note'		=> '出了些问题。无法查看此评论。',
	'options'		=> '选项',
	'cancel'		=> '取消',
	'reply-to-comment'	=> '回复评论',
	'edit-your-comment'	=> '编辑你的评论',
	'optional'		=> '可选',
	'required'		=> '必填',
	'name'			=> '昵称',
	'name-tip'		=> '昵称 (%s)',
	'password'		=> '密码',
	'password-tip'		=> '密码 (%s，允许您编辑或删除此评论)',
	'confirm-password'	=> '确认密码',
	'email'			=> '邮箱',
	'email-tip'		=> '邮箱 (%s，用于接收通知邮件)',
	'website'		=> '网址',
	'website-tip'		=> '网址 (%s)',
	'logged-in'		=> '您已成功登录！',
	'logged-out'		=> '您已成功退出！',
	'comment-needed'	=> '您未能输入正确的评论。使用下面的表格。',
	'reply-needed'		=> '您未能输入正确的回复。使用下面的表格。',
	'field-needed'		=> '「%s」是必须要填写的。',
	'post-fail'		=> 'Oops！你没有足够的权限。',
	'comment-deleted'	=> '评论已删除！',
	'post-reply'		=> '发表回复',
	'delete'		=> '删除',
	'subscribe'		=> '有回复通知我',
	'subscribe-tip'		=> '订阅电子邮件通知',
	'edit-comment'		=> '编辑评论',
	'status'		=> '状态',
	'status-approved'	=> '批准',
	'status-pending'	=> '等待审核',
	'status-deleted'	=> '标记为已删除',
	'save-edit'		=> '保存编辑',
	'no-email-warning'	=> '如果不填写邮箱，你将不会收到对你评论的回复通知。',
	'invalid-email'		=> '输入的邮箱是无效的。',
	'delete-comment'	=> '你确定要删除此评论吗？',
	'post-comment-on'	=> array ('发表评论', '在「%s」发表评论'),
	'popular-comments'	=> array ('热门评论', '热门评论'),
	'showing-comments'	=> array ('目前有%d条评论', '目前有%d条评论'),
	'count-link'		=> array ('%d条评论', '%d条评论'),
	'count-replies'		=> array ('%d条回复', '%d条回复'),
	'sort'			=> '类别',
	'sort-ascending'	=> '默认',
	'sort-descending'	=> '以相反的顺序',
	'sort-by-date'		=> '最新发表优先',
	'sort-by-likes'		=> '点赞最多优先',
	'sort-by-replies'	=> '回复最多优先',
	'sort-by-discussion'	=> '讨论模式',
	'sort-by-popularity'	=> '人气模式',
	'sort-by-name'		=> '评论者模式',
	'sort-threads'		=> '更多模式',
	'thread'		=> '回复%s',
	'thread-tip'		=> '返回顶部',
	'comments'		=> '条评论',
	'replies'		=> '条回复',
	'edit'			=> '编辑',
	'reply'			=> '回复',
	'like'			=> array ('个赞', '个赞'),
	'liked'			=> '已点赞',
	'unlike'		=> '不赞了',
	'like-comment'		=> '\'点赞\' 此评论',
	'liked-comment'		=> '取消此评论的赞',
	'dislike'		=> array ('不喜欢', '不喜欢'),
	'disliked'		=> '不喜欢',
	'dislike-comment'	=> '\'不喜欢\' 这条评论',
	'disliked-comment'	=> '你已经 \'不喜欢\' 这条评论了',
	'commenter-tip'		=> '您不会通过邮箱获取通知',
	'subscribed-tip'	=> '将通过邮箱通知',
	'unsubscribed-tip'	=> '未订阅邮箱通知',
	'show-other-comments'	=> array ('显示其它%d条评论', '显示其它%d条评论'),
	'show-number-comments'	=> array ('已有%d条评论', '已有%d条评论'),
	'date-years'		=> array ('%d年以前', '%d年以前'),
	'date-months'		=> array ('%d月以前', '%d月以前'),
	'date-days'		=> array ('%d天前', '%d天前'),
	'date-today'		=> '%s今天',
	'untitled'		=> '无标题',
	'external-image-tip'	=> '点击查看外部图像',
	'loading'		=> '载入中…',
	'click-to-close'	=> '点击关闭',
	'hashover-comments'	=> 'HashOver条评论',
	'rss-feed'		=> 'RSS订阅',
	'source-code'		=> '源代码'
);
