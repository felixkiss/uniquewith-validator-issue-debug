<?php

class PhoneTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function testShouldBeAbleToCreateNewModel()
    {
        $attributes = [
            'company' => 'Foo',
            'model'   => 'Bar',
        ];
        $phone = new Phone($attributes);
        $phone->save();
    }

    public function testShouldThrowExceptionWhenCreatingExistingModel()
    {
        $attributes = [
            'company' => 'Foo',
            'model'   => 'Bar',
        ];

        Phone::create($attributes);

        $this->setExpectedException('LaravelBook\Ardent\InvalidModelException');

        $phone = new Phone($attributes);
        $phone->save();
    }
}
