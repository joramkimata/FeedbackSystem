<?php


class QuestionController extends BaseController{
	public function create(){
		return View::make('questions.create');
	}
}