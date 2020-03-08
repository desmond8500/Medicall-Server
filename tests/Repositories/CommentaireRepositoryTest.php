<?php namespace Tests\Repositories;

use App\Models\Commentaire;
use App\Repositories\CommentaireRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CommentaireRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CommentaireRepository
     */
    protected $commentaireRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->commentaireRepo = \App::make(CommentaireRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_commentaire()
    {
        $commentaire = factory(Commentaire::class)->make()->toArray();

        $createdCommentaire = $this->commentaireRepo->create($commentaire);

        $createdCommentaire = $createdCommentaire->toArray();
        $this->assertArrayHasKey('id', $createdCommentaire);
        $this->assertNotNull($createdCommentaire['id'], 'Created Commentaire must have id specified');
        $this->assertNotNull(Commentaire::find($createdCommentaire['id']), 'Commentaire with given id must be in DB');
        $this->assertModelData($commentaire, $createdCommentaire);
    }

    /**
     * @test read
     */
    public function test_read_commentaire()
    {
        $commentaire = factory(Commentaire::class)->create();

        $dbCommentaire = $this->commentaireRepo->find($commentaire->id);

        $dbCommentaire = $dbCommentaire->toArray();
        $this->assertModelData($commentaire->toArray(), $dbCommentaire);
    }

    /**
     * @test update
     */
    public function test_update_commentaire()
    {
        $commentaire = factory(Commentaire::class)->create();
        $fakeCommentaire = factory(Commentaire::class)->make()->toArray();

        $updatedCommentaire = $this->commentaireRepo->update($fakeCommentaire, $commentaire->id);

        $this->assertModelData($fakeCommentaire, $updatedCommentaire->toArray());
        $dbCommentaire = $this->commentaireRepo->find($commentaire->id);
        $this->assertModelData($fakeCommentaire, $dbCommentaire->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_commentaire()
    {
        $commentaire = factory(Commentaire::class)->create();

        $resp = $this->commentaireRepo->delete($commentaire->id);

        $this->assertTrue($resp);
        $this->assertNull(Commentaire::find($commentaire->id), 'Commentaire should not exist in DB');
    }
}
