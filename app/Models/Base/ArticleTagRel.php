<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleTagRel
 *
 * @property int $id
 * @property int $article_id
 * @property int $tag_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
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
class ArticleTagRel extends Model
{
	protected $table = 'article_tag_rel';

	protected $casts = [
		'article_id' => 'int',
		'tag_id' => 'int'
	];
}
