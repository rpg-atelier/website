<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
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
class Article extends Model
{
	protected $table = 'articles';

	protected $casts = [
		'user_id' => 'int',
		'published' => 'int',
		'imported' => 'int'
	];
}
