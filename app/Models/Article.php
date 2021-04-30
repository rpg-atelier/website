<?php

namespace App\Models;

use App\Models\Base\Article as BaseArticle;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $teaser_text
 * @property string $teaser_image_url
 * @property string $article_body
 * @property int $published
 * @property string $category
 * @property int $imported
 * @property string $imported_user_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereArticleBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImported($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImportedUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTeaserImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTeaserText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @mixin \Eloquent
 */
class Article extends BaseArticle
{
	protected $fillable = [
		'user_id',
		'title',
		'teaser_text',
		'teaser_image_url',
		'article_body',
		'published',
		'category',
		'imported',
		'imported_user_name'
	];
}
