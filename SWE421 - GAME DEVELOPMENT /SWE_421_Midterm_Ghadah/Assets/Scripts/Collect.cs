using System.Collections;
using System.Collections.Generic;
using UnityEngine;


public class Collect : MonoBehaviour
{
public Renderer rd;
public GameManager gm;
public int value = 10;
private void start()
{
rd = GetComponent<Renderer>();
gm = GameObject.Find("GameManager").GetComponent<GameManager>();

}
    private void OnTriggerEnter(Collider other)
    {
    // it collided with the player.
    if(other.gameObject.name =="Player")
    {
     // add to the score.
     gm.UpdateScore(value);
     
    // remove the cube.
    rd.enabled = false;
    Destroy(this.gameObject);
    }
    
    }
    
}
