<?php

namespace App\Models;

use App\Models\Base\ArticleTagRel as BaseArticleTagRel;

/**
 * App\Models\ArticleTagRel
 *
 * @property int $id
 * @property int $article_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTagRel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleTagRel extends BaseArticleTagRel
{
	protected $fillable = [
		'article_id',
		'tag_id'
	];
}
