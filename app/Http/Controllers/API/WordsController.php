<?php

namespace App\Http\Controllers\API;
 
use App\Http\Controllers\Controller;

use App\Models\Words;
use App\Models\TranslationWord;
 
use Illuminate\Http\Request;
 
use Validator;

class WordsController extends Controller
{
    // all languages
    public function index()
    {
        $translations = TranslationWord::getTranslationsByWordId(1);
        return response()->json($translations);
    }
 
    // add word
    public function add(Request $request)
    {
        $word = new Word([
            'word' => $request->input('word'),
            'language_id' => $request->input('language_id'),
            'description' => $request->input('description')
        ]);
        $word->save();
        $wordId = $word->id;

        $translationWord = new TranslationWord([
            'word_id' => $wordId,
            'language_id' => $request->input('language_translate_id'),
            'description' => $request->input('translate_description'),
            'translate' => $request->input('translate')
        ]);
        $translationWord->save();

        return response()->json('The new word successfully added');
    }
 
    // // edit language
    // public function edit($id)
    // {
    //     $language = Languages::find($id);
    //     return response()->json($language);
    // }
 
    // // update language
    // public function update($id, Request $request)
    // {
    //     $language = Languages::find($id);
    //     $language->update($request->all());
 
    //     return response()->json('The language successfully updated');
    // }
 
    // // delete language
    // public function delete($id)
    // {
    //     $language = Languages::find($id);
    //     $language->delete();
 
    //     return response()->json('The language successfully deleted');
    // }
}
