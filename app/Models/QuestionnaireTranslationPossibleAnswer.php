<?php
/**
 * Created by IntelliJ IDEA.
 * User: snik
 * Date: 7/18/18
 * Time: 3:11 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\QuestionnaireTranslationPossibleAnswer
 *
 * @property int $id
 * @property int $questionnaire_language_id
 * @property int $possible_answer_id
 * @property string $translation
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer wherePossibleAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereQuestionnaireLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionnaireTranslationPossibleAnswer withoutTrashed()
 * @mixin \Eloquent
 */
class QuestionnaireTranslationPossibleAnswer extends Model
{
    use SoftDeletes;

    protected $table = 'questionnaire_translation_possible_answers';
}