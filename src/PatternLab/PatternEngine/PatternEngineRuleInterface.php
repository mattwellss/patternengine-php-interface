<?php

namespace PatternLab\PatternEngine;

interface PatternEngineRuleInterface
{
	public function getPatternLoader($options=array());
	public function getFileSystemLoader($options=array());
	public function getVanillaLoader();
}