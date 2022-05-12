using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerControl : MonoBehaviour
{
public float speed =2.0f;
public Rigidbody rb;
public float jumpForce =2;
public bool onGround = true;

private void Awake()
{
DontDestroyOnLoad(this.gameObject);
}
    // Start is called before the first frame update
    void Start()
    {
     rb = GetComponent<Rigidbody>();   
    }

    // Update is called once per frame
    void FixedUpdate()
    {
    
    
      // move the player's character in the direction of the player's input.
      //use rigidbody
      //tranform.position.
      //trandform.translate.
      
      if(Input.GetAxis("Horizontal") !=0 || Input.GetAxis("Vertical") !=0)
      {
      float moveHorizontal = Input.GetAxis("Horizontal");
      float moveVertical = Input.GetAxis("Vertical");
      
      transform.Translate(moveHorizontal * speed * Time.deltaTime, 0, moveVertical * speed * Time.deltaTime);
      
      //run animation
      }
      if(Input.GetButtonDown("Jump") && onGround)
      {
     rb.AddForce(new Vector3(0.0f, jumpForce,0.0f),ForceMode.Impulse);
     onGround = false;
     }
     
    }
    
   private void OnCollisionEnter(Collision collision)
   {
   onGround = true;
   }
}
